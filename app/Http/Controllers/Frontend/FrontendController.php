<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Counter;
use App\Models\Hero;
use App\Models\Location;
use App\Models\OurFeature;
use App\Models\SectionTitle;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(): View
    {
        $sectionTitle = SectionTitle::first();
        $hero = Hero::first();
        $categories = Category::where('status', 1)->get();
        $locations = Location::where('status', 1)->get();
        $ourFeatures = OurFeature::where('status', 1)->get();
        $counter = Counter::first();
        return view('frontend.home.index', compact(
            'hero',
            'categories',
            'locations',
            'ourFeatures',
            'sectionTitle',
            'counter'
        ));
    }
}