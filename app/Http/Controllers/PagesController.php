<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['createSale', 'mySales']);
    }

    public function home(){
       return view('home');
    }

    public function createSale(){
        return view('create-sale');
    }

    public function mySales(){
        return view('my-sales');
    }
}
