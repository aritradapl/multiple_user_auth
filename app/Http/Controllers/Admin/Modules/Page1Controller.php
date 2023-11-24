<?php

namespace App\Http\Controllers\Admin\Modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index(){
        return view('admin.modules.page1');
    }
}
