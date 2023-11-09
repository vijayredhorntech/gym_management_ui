<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembershipRequest;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::all();
        return view('membership.index', compact('memberships'));
    }

    public function create()
    {
        return view('membership.create');
    }

    public function store(MembershipRequest $request)
    {
        Membership::create($request->all());
        return redirect()->route('membership.index')->with('success', 'membership created successfully.');
    }

    public function edit(Membership $membership)
    {
        return view('membership.edit', compact('membership'));
    }

    public function update(MembershipRequest $request, Membership $membership)
    {
        $membership->update($request->all());
        return redirect()->route('membership.index')->with('success', 'membership updated successfully.');
    }

    public function destroy(Membership $membership)
    {
        $membership->delete();
        return redirect()->route('membership.index')->with('success', 'membership deleted successfully.');
    }
}
