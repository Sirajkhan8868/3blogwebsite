<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use Spatie\FlareClient\View;

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
    public function header()
    {
        return view('layouts.header');
    }
    public function booksnow()
    {
        return view('components.booksnow');
    }
    public function contact()
    {
        return view('components.contact');
    }
    public function view()
    {
        return view('components.view');
    }
    public function hr()
    {
        return View('components.hr');
    }
    public function pm()
    {
        return view('components.pm');
    }
    public function cm()
    {
        return view('components.cm');
    }
    public function lm()
    {
        return view('components.lm');
    }
    public function as()
    {
        return view('components.as');
    }
    public function et()
    {
        return view('components.et');
    }
    public function bm()
    {
        return view('components.bm');
    }
    public function af()
    {
        return view('components.af');
    }
}
