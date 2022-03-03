<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view ('contact-us')
        ->with ('nama','Muhammad Rizki Mubarok')
        ->with('nim','2041720001')
        ->with('facebook','https://www.facebook.com/rizki.mubarok.7330/')
        ->with('instagram','https://www.instagram.com/rizkimbrkk/');
    
    }
}
