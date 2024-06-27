<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index() {
        return view('home.index', ['post'=>BlogPosts::all()]);
}
    
}
