<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipmentRequest;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipment.index', compact('equipments'));
    }

    public function create()
    {
        return view('equipment.create');
    }

    public function store(EquipmentRequest $request)
    {
        $equipment = Equipment::create($request->all());
        $equipmentImage = $request->file('image')->store('public/equipment/image');
        $equipment->image = str_replace('public/','', $equipmentImage);
        $equipment->save();
        return redirect()->route('equipment.index')->with('success', 'equipment created successfully.');
    }

    public function edit(Equipment $equipment)
    {
        return view('equipment.edit', compact('equipment'));
    }

    public function update(EquipmentRequest $request, Equipment $equipment)
    {
        if($request->file('image')){
            $equipment->image ? unlink('storage/'. $equipment->image) : '';
            $equipment->update([
                'image'=>str_replace('public/','', $request->file('image')->store('equipment/image','public'))
            ]);
        }
        $equipment->update($request->except('image'));
        return redirect()->route('equipment.index')->with('success', 'equipment updated successfully.');
    }

    public function destroy(Equipment $equipment)
    {
        if($equipment->image){
            unlink('storage/'. $equipment->image);
        }
        $equipment->delete();
        return redirect()->route('equipment.index')->with('success', 'equipment deleted successfully.');
    }
}
