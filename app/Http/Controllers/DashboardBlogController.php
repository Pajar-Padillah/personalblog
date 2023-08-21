<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $blog = Blog::latest()->filter(request(['search', 'category']))->where('user_id', auth()->user()->id)->paginate(5);
        $blog = Blog::latest()->filter(request(['search', 'category']))->paginate(5);
        return view('dashboard/blog/index', [
            'title' => "All Blog",
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/blog/create', [
            'title' => "Create Blog",
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blog',
            'category_id' => 'required',
            'image' => 'required|image|file|mimes:jpg,jpeg,png,gif|max:2048',
            'body' => 'required'
        ]);

        $image_file = $request->file('image');
        $image_ekstensi = $image_file->extension();
        $image_name = date('ymdhis') . "." . $image_ekstensi;
        $image_file->move(public_path('uploud/blog'), $image_name);

        $validate_data['image'] = $image_name;
        $validate_data['user_id'] = auth()->user()->id;
        $validate_data['excerpt'] = Str::limit(strip_tags($request->body), 150);
        Blog::create($validate_data);
        toastr()->success('Blog has been added!');
        return redirect('/dashboard/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('dashboard/blog/show', [
            'blog' => $blog,
            'title' => 'Blog Detail'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard/blog/edit', [
            'title' => "Edit Blog",
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required',
            'category_id' => 'required',
            'image' => 'image|file|mimes:jpg,jpeg,png,gif|max:2048',
            'body' => 'required'
        ];
        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blog';
        }
        $validate_data = $request->validate($rules);

        if ($request->File('image')) {
            if ($request->old_image) {
                File::delete(public_path('uploud/blog') . '/' . $request->old_image);
            }
            $image_file = $request->file('image');
            $image_ekstensi = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_ekstensi;
            $image_file->move(public_path('uploud/blog'), $image_name);
            $validate_data['image'] = $image_name;
        }

        $validate_data['user_id'] = auth()->user()->id;
        $validate_data['excerpt'] = Str::limit(strip_tags($request->body), 150);

        Blog::where('id', $blog->id)->update($validate_data);
        toastr()->success('Blog has been updated!');
        return redirect('/dashboard/blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            File::delete(public_path('uploud/blog') . '/' . $blog->image);
        }
        Blog::destroy($blog->id);
        toastr()->success('Blog has been deleted!');
        return redirect('/dashboard/blog');
    }
}
