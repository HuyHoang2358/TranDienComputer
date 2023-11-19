<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManager extends Controller
{
    function index(){
        return view("admin.content.media.index");
    }
}
