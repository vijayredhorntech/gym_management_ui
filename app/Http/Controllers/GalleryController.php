<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.gallery', compact('galleries'));
    }

    public function create()
    {
        $exercise = '';
        return view('admin.gallery.galleryForm', compact('exercise'));
    }

    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->except('media'));
        if($request->file('media')){
            $galleryMedia = $request->file('media')->store('public/gallery/media');
            $gallery->media = str_replace('public/','', $galleryMedia);
            $gallery->save();
        }
        return redirect()->route('gallery.index')->with('success', 'gallery created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.galleryForm', compact('gallery'));
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        if($request->file('media')){
            $gallery->media ? unlink('storage/'. $gallery->media) : '';
            $gallery->update([
                'media'=>str_replace('public/','', $request->file('media')->store('gallery/media','public'))
            ]);
        }
        $gallery->update($request->except('media'));
        return redirect()->route('gallery.index')->with('success', 'gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if($gallery->media){
            unlink('storage/'. $gallery->media);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'gallery deleted successfully.');
    }
}
