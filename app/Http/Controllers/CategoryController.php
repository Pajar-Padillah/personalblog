<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard/categories/index', [
            'title' => 'Categories',
            'categories' => Category::latest()->filter(request(['search']))->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/categories/create', [
            'title' => "Create Category"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories'
        ]);
        Category::create($validate_data);
        toastr()->success('Category has been added!');
        return redirect('/dashboard/categories');
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
    public function edit(Category $category)
    {
        return view('dashboard/categories/edit', [
            'title' => "Edit Category",
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required',
        ];
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }
        $validate_data = $request->validate($rules);

        Category::where('id', $category->id)->update($validate_data);
        toastr()->success('Category has been updated!');
        return redirect('/dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        toastr()->success('Category has been deleted!');
        return redirect('/dashboard/categories');
    }
}
