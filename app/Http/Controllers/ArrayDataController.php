<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayDataController extends Controller
{
    public function index()
    {
        $data = [
            ['proton', 'honda', 'toyota'],
            ['mitsubishi', 'chevrolet', 'bmw'],
            ['mercedes', 'audi', 'perodua'],
        ];

        return view('index', compact('data'));
    }
}