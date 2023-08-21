<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index', [
            'title' => "Home",
            'gallery' => Gallery::latest()->paginate(10),
            'blogs' => Blog::latest()->paginate(3)
        ]);
    }
    public function about()
    {
        return view('home/about', [
            'title' => "About Us"
        ]);
    }
    public function gallery()
    {
        return view('home/gallery', [
            'title' => "Gallery",
            'gallery' => Gallery::latest()->paginate(6)
        ]);
    }
    public function contact()
    {
        return view('home/contact', [
            'title' => "Contact"
        ]);
    }
}
