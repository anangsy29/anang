<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'doraemon',
        //     'pekerjaan' => 'developer',
        // ];
        // return view('home')->with($data);

        $nama = "nobita";
        $pekerjaan = "student";
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
