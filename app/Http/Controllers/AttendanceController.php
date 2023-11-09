<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttendanceRequest;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendance.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendance.create');
    }

    public function store(AttendanceRequest $request)
    {
        Attendance::create($request->all());
        return redirect()->route('attendance.index')->with('success', 'attendance created successfully.');
    }

//    public function show(Attendance $attendance)
//    {
//        return view('attendances.show', compact('attendance'));
//    }

    public function edit(Attendance $attendance)
    {
        return view('attendance.edit', compact('attendance'));
    }

    public function update(AttendanceRequest $request, Attendance $attendance)
    {
        $attendance->update($request->all());
        return redirect()->route('attendance.index')->with('success', 'attendance updated successfully.');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendance.index')->with('success', 'attendance deleted successfully.');
    }
}
