<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index(){
        $name = "Abhishek";
        return Inertia::render('Frontend/Home',compact('name'));
    }

    public function about(){
        return Inertia::render('Frontend/About');
    }

    public function contact(){
        return Inertia::render('Frontend/Contact');
    }
}
