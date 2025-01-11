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
    public function christmas()
    {
        return view('components.christmas');
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
    public function human()
    {
        return View('components.human');
    }
    public function project()
    {
        return view('components.project');
    }
    public function construction()
    {
        return view('components.construction');
    }
    public function leadership()
    {
        return view('components.leadership');
    }
    public function admin()
    {
        return view('components.admin');
    }
    public function education()
    {
        return view('components.education');
    }
    public function business()
    {
        return view('components.business');
    }
    public function accounting()
    {
        return view('components.accounting');
    }
}
