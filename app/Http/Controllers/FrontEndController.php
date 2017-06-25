<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function landing()
    {
        return view('landing');
    }

    public function pitchYourIdea()
    {
        return view('pitch-your-idea');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function briefUs()
    {
        return view('brief-us');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }
}
