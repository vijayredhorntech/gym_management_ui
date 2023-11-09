<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkoutRequest;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    public function index()
    {
        $workouts = Workout::all();
        return view('workout.index', compact('workouts'));
    }

    public function create()
    {
        return view('workout.create');
    }

    public function store(WorkoutRequest $request)
    {
        $workout = Workout::create($request->all());
        $workoutImage = $request->file('image')->store('public/workout/image');
        $workout->image = str_replace('public/','', $workoutImage);
        $workout->save();
        return redirect()->route('workout.index')->with('success', 'workout created successfully.');
    }

    public function edit(Workout $workout)
    {
        return view('workout.edit', compact('workout'));
    }

    public function update(WorkoutRequest $request, Workout $workout)
    {
        if($request->file('image')){
            $workout->image ? unlink('storage/'. $workout->image) : '';
            $workout->update([
                'image'=>str_replace('public/','', $request->file('image')->store('workout/image','public'))
            ]);
        }
        $workout->update($request->except('image'));
        return redirect()->route('workout.index')->with('success', 'workout updated successfully.');
    }

    public function destroy(Workout $workout)
    {
        if($workout->image){
            unlink('storage/'. $workout->image);
        }
        $workout->delete();
        return redirect()->route('workout.index')->with('success', 'workout deleted successfully.');
    }
}
