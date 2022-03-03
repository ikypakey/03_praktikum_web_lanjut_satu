<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program1(){
        return view ('program')
        ->with ('nama_program','Ini Adalah Daftar Program Pertama : Microsoft SQL Server');
    }
    public function program2(){
        return view ('program')
        ->with ('nama_program','Ini Adalah Daftar Program Kedua : Visual Studio');
    }
    public function program3(){
        return view ('program')
        ->with ('nama_program','Ini Adalah Daftar Program Ketiga : Star Diagram');
       
    }
}
