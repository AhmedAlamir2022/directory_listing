<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Hero;
use App\Models\Location;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(): View
    {
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        return view('frontend.home.index', compact('hero', 'categories', 'locations'));
    }
}
