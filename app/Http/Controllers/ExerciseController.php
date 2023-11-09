<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Http\Requests\ExerciseRequest;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index()
    {
        $exercises = Exercise::all();
        return view('exercise.index', compact('exercises'));
    }

    public function create()
    {
        return view('exercise.create');
    }

    public function store(ExerciseRequest $request)
    {
        $exercise = Exercise::create($request->all());
        $exerciseImage = $request->file('image')->store('public/exercise/image');
        $exercise->image = str_replace('public/','', $exerciseImage);
        $exercise->save();
        return redirect()->route('exercise.index')->with('success', 'exercise created successfully.');
    }

    public function edit(Exercise $exercise)
    {
        return view('exercise.edit', compact('exercise'));
    }

    public function update(ExerciseRequest $request, Exercise $exercise)
    {
        if($request->file('image')){
            $exercise->image ? unlink('storage/'. $exercise->image) : '';
            $exercise->update([
                'image'=>str_replace('public/','', $request->file('image')->store('exercise/image','public'))
            ]);
        }
        $exercise->update($request->except('image'));
        return redirect()->route('exercise.index')->with('success', 'exercise updated successfully.');
    }

    public function destroy(Exercise $exercise)
    {
        if($exercise->image){
            unlink('storage/'. $exercise->image);
        }
        $exercise->delete();
        return redirect()->route('exercise.index')->with('success', 'exercise deleted successfully.');
    }
}
