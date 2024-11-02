<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Slide;
class HomeController extends Controller
{

    public function home()
    {
        $slides = Slide::all();
        $abouts = About::all();
        $blogs = Blog::all();
        return view('home.template.app', compact('slides','abouts','blogs'));
    }

    public function berita ()
    {
        $blogs = Blog::all();
        return view('home.template.berita', compact('blogs'));
    }

    public function contact ()
    {
        return view('home.template.contact');
    }

    public function visi()
    {
        return view('home.template.visimisi');
    }
}
