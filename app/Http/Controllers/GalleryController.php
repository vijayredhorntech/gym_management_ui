<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller{
    public function index()
    {
        $galleries = Gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->all());
        if($request->file('media')){
            $galleryImage = $request->file('image')->store('public/gallery/media');
            $gallery->image = str_replace('public/','', $galleryImage);
        }else{
            $gallery->link = $request->link;
        }
        $gallery->save();
        return redirect()->route('gallery.index')->with('success', 'gallery created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', compact('gallery'));
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        if($request->file('media')){
            $gallery->image ? unlink('storage/'. $gallery->image) : '';
            $gallery->update([
                'image'=>str_replace('public/','', $request->file('image')->store('gallery/media','public'))
            ]);
        }
        $gallery->update($request->except('image'));
        return redirect()->route('gallery.index')->with('success', 'gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if($gallery->image){
            unlink('storage/'. $gallery->image);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'gallery deleted successfully.');
    }
}
