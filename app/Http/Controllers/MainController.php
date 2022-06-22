<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories=Category::latest()->take(4)->get();
        return view('front.index',compact('categories'));
    }
    public function login()
    {
        return view('front.login');
    }
}
