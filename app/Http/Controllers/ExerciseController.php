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
        return view('admin.exercise.exercises', compact('exercises'));
    }

    public function create()
    {
        $exercise = '';
        return view('admin.exercise.exerciseForm', compact('exercise'));
    }

    public function store(ExerciseRequest $request)
    {
        $exercise = Exercise::create($request->except('media'));
        if($request->file('media')){
            $exerciseMedia = $request->file('media')->store('public/exercise/media');
            $exercise->media = str_replace('public/','', $exerciseMedia);
            $exercise->save();
        }
        return redirect()->route('exercise.index')->with('success', 'exercise created successfully.');
    }

    public function edit(Exercise $exercise)
    {
        return view('admin.exercise.exerciseForm', compact('exercise'));
    }

    public function update(ExerciseRequest $request, Exercise $exercise)
    {
        if($request->file('media')){
            $exercise->media ? unlink('storage/'. $exercise->media) : '';
            $exercise->update([
                'media'=>str_replace('public/','', $request->file('media')->store('exercise/media','public'))
            ]);
        }
        $exercise->update($request->except('media'));
        return redirect()->route('exercise.index')->with('success', 'exercise updated successfully.');
    }

    public function destroy(Exercise $exercise)
    {
        if($exercise->media){
            unlink('storage/'. $exercise->media);
        }
        $exercise->delete();
        return redirect()->route('exercise.index')->with('success', 'exercise deleted successfully.');
    }
}
