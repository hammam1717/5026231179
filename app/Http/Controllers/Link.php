<?php

namespace App\Http\Controllers; //ini tuh packagenya

use Illuminate\Http\Request;

class Link extends Controller
{
    //Bikin function
    //public function namafuntion()
    public function helloword()
    {
        return view('blog');
    }
}
