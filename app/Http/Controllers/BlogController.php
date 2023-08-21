<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('home/blog', [
            'title' => 'All Blog' . $title,
            'active' => 'blog',
            'blogs' => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            'categories' => Category::all()
        ]);

        // WithQueryString biar url setelahnya ngikut ke next page 
    }

    public function show(Blog $blog)
    {
        return view('home/blogdetail', [
            'title' => 'Blog Detail',
            'active' => 'blog',
            'blog' => $blog,
            'categories' => Category::all()
        ]);
    }
}
