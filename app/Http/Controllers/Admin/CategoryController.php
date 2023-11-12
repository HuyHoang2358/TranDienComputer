<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class CategoryController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view("admin.content.category.index");
    }
    public function add(): Factory|View|Application
    {
        return view("admin.content.category.add");
    }
}
