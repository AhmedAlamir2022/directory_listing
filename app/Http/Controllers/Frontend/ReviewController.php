<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = Auth::user();
        $reviews = Review::with('listing')->where('user_id', $user->id)->where('is_approved', 1)->orderBy('id', 'DESC')->paginate();

        // dd($reviews->toArray());


        // $user = ;
        // // dd($user);
        // // $listings = Listing::with('reviews')->where('user_id', $user->id)->get();
        // $reviews = Review::with('listing')
        //     ->whereHas('listing', function ($query) {
        //         $query->where('user_id', auth()->user()->id);
        //     });
        // return reviews;

        return view('frontend.dashboard.review.index', compact('reviews'));
    }
}
