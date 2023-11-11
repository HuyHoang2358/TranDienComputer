<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class MainController extends Controller
{
    public function homepage(): Factory|View|Application
    {
        return view("admin.homepage");

    }
}
