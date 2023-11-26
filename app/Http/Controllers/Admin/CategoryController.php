<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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
