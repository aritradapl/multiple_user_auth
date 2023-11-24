<?php

namespace App\Http\Controllers\Frontend\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index(){
        return view('frontend.modules.page1');
    }
}
