<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($title){
        return view('news')
        -> with('berita', 'Berita Terbaru Hari Ini Trending Nomor ' .$title)
        -> with('url', 'https://news.detik.com/');
    }
    
}
