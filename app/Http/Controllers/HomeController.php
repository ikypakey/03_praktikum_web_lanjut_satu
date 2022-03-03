<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view ('home')
        ->with ('nama','Muhammad Rizki Mubarok')
        ->with('nim','2041720001');
    } 
}
