<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::latest()->filter(request(['search']))->paginate(5);
        return view('dashboard/gallery/index', [
            'title' => "All Gallery",
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/gallery/create', [
            'title' => "Create Gallery"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'image' => 'required|image|file|mimes:jpg,jpeg,png,gif|max:2048',
            'desc' => 'required'
        ]);

        $image_file = $request->file('image');
        $image_ekstensi = $image_file->extension();
        $image_name = date('ymdhis') . "." . $image_ekstensi;
        $image_file->move(public_path('uploud/gallery'), $image_name);

        $validate_data['image'] = $image_name;
        Gallery::create($validate_data);
        toastr()->success('Gallery has been added!');
        return redirect('/dashboard/gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('dashboard/gallery/edit', [
            'title' => "Edit Gallery",
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'title' => 'required',
            'image' => 'image|file|mimes:jpg,jpeg,png,gif|max:2048',
            'desc' => 'required'
        ];
        $validate_data = $request->validate($rules);

        if ($request->File('image')) {
            if ($request->old_image) {
                File::delete(public_path('uploud/gallery') . '/' . $request->old_image);
            }
            $image_file = $request->file('image');
            $image_ekstensi = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_ekstensi;
            $image_file->move(public_path('uploud/gallery'), $image_name);
            $validate_data['image'] = $image_name;
        }
        Gallery::where('id', $gallery->id)->update($validate_data);
        toastr()->success('Gallery has been updated!');
        return redirect('/dashboard/gallery');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            File::delete(public_path('uploud/gallery') . '/' . $gallery->image);
        }
        Gallery::destroy($gallery->id);
        toastr()->success('Gallery has been deleted!');
        return redirect('/dashboard/gallery');
    }
}
