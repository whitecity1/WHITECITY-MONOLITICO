<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesomosController extends Controller
{
    public function index(){

        return view('quienesomos.index');
    }
}
