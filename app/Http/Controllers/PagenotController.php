<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagenotController extends Controller
{
    //fungsi
    public function index(){
        return view('admin.pagenot');
    }
}
