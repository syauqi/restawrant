<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $menus = Menu::take(8)->get();

        $categories = Category::all();

        return view('welcome', compact('menus', 'categories'));
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
