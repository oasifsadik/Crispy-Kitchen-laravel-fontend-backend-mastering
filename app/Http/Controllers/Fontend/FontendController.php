<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FontendController extends Controller
{
    public function index()
    {
        return view('font.index');
    }
    public function about()
    {
        return view('font.about');
    }
    public function menu()
    {
        return view('font.menu');
    }
    public function news()
    {
        return view('font.our-update');
    }
    public function contact()
    {
        return view('font.contact');
    }
}
