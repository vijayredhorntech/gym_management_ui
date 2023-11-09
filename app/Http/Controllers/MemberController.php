<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
//        Member::all()
        $members = Member::all();
        return view('admin.member.users', compact('members'));
    }

    public function create()
    {
        $member = '';
        return view('admin.member.userForm', compact('member'));
    }

    public function store(MemberRequest $request)
    {
//        dd($request->all());
        $member = Member::create($request->all());
        if($request->file('media')){
            $memberMedia = $request->file('media')->store('public/member/media');
            $member->media = str_replace('public/','', $memberMedia);
            $member->save();
        }
        return redirect()->route('member.index')->with('success', 'Member created successfully.');
    }

//    public function show(Member $member)
//    {
//        return view('members.show', compact('member'));
//    }

    public function edit(Member $member)
    {
        return view('admin.member.userForm', compact('member'));
    }

    public function update(MemberRequest $request, Member $member)
    {
        if($request->file('media')){
            $member->media ? unlink('storage/'. $member->media) : '';
            $member->update([
                'media'=>str_replace('public/','', $request->file('media')->store('member/media','public'))
            ]);
        }
        $member->update($request->except('media'));
        return redirect()->route('member.index')->with('success', 'Member updated successfully.');
    }

    public function destroy(Member $member)
    {
        if($member->media){
            unlink('storage/'. $member->media);
        }
        $member->delete();
        return redirect()->route('member.index')->with('success', 'Member deleted successfully.');
    }

}
