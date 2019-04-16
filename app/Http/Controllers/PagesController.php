<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $foo = 'bar';

        return view('welcome')->with([
            'foo' => 'bar',
        ]);

        /*
        return view('welcome', [
            'foo' => $foo
        ]);

        return view('welcome')->withFoo('bar');

        */
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
