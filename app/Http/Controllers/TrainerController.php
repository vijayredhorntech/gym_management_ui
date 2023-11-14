<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrainerRequest;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('admin.trainer.trainers', compact('trainers'));
    }

    public function create()
    {
        return view('admin.trainer.trainerForm');
    }

    public function store(TrainerRequest $request)
    {
        $trainer = Trainer::create($request->all());
        if($request->file('media')){
            $trainerMedia = $request->file('media')->store('public/trainer/media');
            $trainer->media = str_replace('public/','', $trainerMedia);
            $trainer->save();
        }
        return redirect()->route('trainer.index')->with('success', 'trainer created successfully.');
    }

    public function edit(Trainer $trainer)
    {
        return view('admin.trainer.trainerForm', compact('trainer'));
    }

    public function update(TrainerRequest $request, Trainer $trainer)
    {
        if($request->file('media')){
            $trainer->media ? unlink('storage/'. $trainer->media) : '';
            $trainer->update([
                'media'=>str_replace('public/','', $request->file('media')->store('trainer/media','public'))
            ]);
        }
        $trainer->update($request->except('media'));
        return redirect()->route('trainer.index')->with('success', 'trainer updated successfully.');
    }

    public function destroy(Trainer $trainer)
    {
        if($trainer->media){
            unlink('storage/'. $trainer->media);
        }
        $trainer->delete();
        return redirect()->route('trainer.index')->with('success', 'trainer deleted successfully.');
    }
}
