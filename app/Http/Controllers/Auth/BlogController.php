<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('layouts.website');
    }
    public function offer()
    {
        return view('components.offer');
    }
}
