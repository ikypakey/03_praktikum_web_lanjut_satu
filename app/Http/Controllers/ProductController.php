<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product1(){
        return view ('product')
        ->with ('nama_produk','Kapas')
        ->with ('link','https://www.klikindomaret.com/product/kapas-kecantikan');
    }
    public function product2(){
        return view ('product')
        ->with ('nama_produk','Gunting')
        ->with ('link','https://id.lovepik.com/image-501152537/scissors.html');
    }
    public function product3(){
        return view ('product')
        ->with ('nama_produk','Obeng')
        ->with ('link','https://www.pngdownload.id/png-dc2h9x/');
    }
}
