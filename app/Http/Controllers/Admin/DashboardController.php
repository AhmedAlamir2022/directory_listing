<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index(): View
    {
        // $totalListingCount = Listing::count();
        // $pendingListingCount = Listing::where('is_approved', 0)->count();
        // $orderCount = Order::count();
        // $claimCount = Claim::count();
        // $listingCategoryCount = Category::count();
        // $locationCount = Location::count();
        // $blogCount = Blog::count();
        // $blogCategoryCount = BlogCategory::count();
        // $adminCount = User::where('user_type', 'admin')->count();
        // $permissionCount = Permission::count();
        // $roleCount = Role::count();
        // $totalTestimonials = Testimonial::count();


        return view('admin.dashboard.index');
    }
}