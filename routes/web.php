<?php

use App\Http\Controllers\Frontend\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('listing-modal/{id}', [FrontendController::class, 'listingModal'])->name('listing-modal');

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile-password', [ProfileController::class, 'updatePassword'])->name('profile-password.update');
    // Route::get('/messages', [ChatController::class, 'index'])->name('messages');

    /** Message Routes */
    // Route::post('/send-message', [ChatController::class, 'sendMessage'])->name('send-message');
    // Route::get('/get-messages', [ChatController::class, 'getMessages'])->name('get-messages');


    /** Linsting Routes */
    // Route::resource('/listing', AgentListingController::class);

    /** Listing Image Gallery Routes */
    // Route::resource('/listing-image-gallery', AgentListingImageGalleryController::class);
    /** Listing Video Gallery Routes */
    // Route::resource('/listing-video-gallery', AgentListingVideoGalleryController::class);

    /** Listing Schedule Routes */
    // Route::get('/listing-schedule/{listing_id}', [AgentListingScheduleController::class, 'index'])->name('listing-schedule.index');
    // Route::get('/listing-schedule/{listing_id}/create', [AgentListingScheduleController::class, 'create'])->name('listing-schedule.create');
    // Route::post('/listing-schedule/{listing_id}', [AgentListingScheduleController::class, 'store'])->name('listing-schedule.store');
    // Route::get('/listing-schedule/{id}/edit', [AgentListingScheduleController::class, 'edit'])->name('listing-schedule.edit');
    // Route::put('/listing-schedule/{id}', [AgentListingScheduleController::class, 'update'])->name('listing-schedule.update');
    // Route::delete('/listing-schedule/{id}', [AgentListingScheduleController::class, 'destroy'])->name('listing-schedule.destroy');

    /** Order Routes */
    // Route::get('orders', [OrderController::class, 'index'])->name('order.index');
    // Route::get('orders/{id}', [OrderController::class, 'show'])->name('order.show');

    /** Review Routes */
    // Route::resource('reviews', ReviewController::class);
});

require __DIR__ . '/auth.php';
