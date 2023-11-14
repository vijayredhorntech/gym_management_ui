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
        return view('admin.workout.workouts', compact('workouts'));
    }

    public function create()
    {
        return view('admin.workout.workoutForm');
    }

    public function store(WorkoutRequest $request)
    {
        $workout = Workout::create($request->all());
        if($request->file('media')){
            $workoutImage = $request->file('media')->store('public/workout/media');
            $workout->media = str_replace('public/', '', $workoutImage);
            $workout->save();
        }
        return redirect()->route('workout.index')->with('success', 'workout created successfully.');
    }

    public function edit(Workout $workout)
    {
        return view('workout.edit', compact('workout'));
    }

    public function update(WorkoutRequest $request, Workout $workout)
    {
        if($request->file('media')){
            $workout->media ? unlink('storage/'. $workout->media) : '';
            $workout->update([
                'media'=>str_replace('public/','', $request->file('media')->store('workout/media','public'))
            ]);
        }
        $workout->update($request->except('media'));
        return redirect()->route('workout.index')->with('success', 'workout updated successfully.');
    }

    public function destroy(Workout $workout)
    {
        if($workout->media){
            unlink('storage/'. $workout->media);
        }
        $workout->delete();
        return redirect()->route('workout.index')->with('success', 'workout deleted successfully.');
    }
}
