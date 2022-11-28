<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Support\Facades\Route;

//................................public-pages-start.......................................................................................
Route::get('/', [PageController::class, 'root'])->name('root');
Route::get('/index', [PageController::class, 'root'])->name('index');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/elements', [PageController::class, 'elements'])->name('elements');
Route::get('/rooms', [PageController::class, 'rooms'])->name('rooms');
Route::get('/services', [PageController::class, 'services'])->name('services');
// Authentication
// sign up
Route::get('/register', [AuthController::class, 'create'])->name('create');
Route::post('/register', [AuthController::class, 'store'])->name('store');
// sign in
Route::get('/login', [AuthController::class, 'set'])->name('set');
Route::post('/login', [AuthController::class, 'go'])->name('go');
//logout
Route::get('/logout', [PageController::class, 'logout'])->name('logout');



//.................................admin-pages-start..............................................................................................
Route::get('admin/dashboard', [PageController::class, 'admin'])->name('admin-dashboard');
Route::get('admin/add', [PageController::class, 'adminAddRoom'])->name('admin-addroom');
Route::post('admin/add', [AuthController::class, 'adminAddRoom2'])->name('admin-addroom2');
Route::get('admin/rooms', [PageController::class, 'adminViewRoom'])->name('admin-viewroom');
Route::get('admin/rooms-details/{id}', [PageController::class, 'adminroomsdetails'])->name('admin-rooms-details');
Route::get('admin/rooms/edit/{id}', [PageController::class, 'adminEditRoom'])->name('admin-edit-room');
Route::post('admin/rooms/edit/{id}', [PageController::class, 'adminEditRoom2'])->name('admin-edit-room2');
Route::get('admin/rooms/delete/{id}', [PageController::class, 'adminDeleteRoom']);
Route::get('admin/booked-room', [PageController::class, 'bookedRoom'])->name('booked-rooms');
Route::get('admin/free-room', [PageController::class, 'freeRoom'])->name('free-rooms');





//.................................guest-pages-start................................................................................................
Route::get('guest/dashboard', [PageController::class, 'guest'])->name('guest-dashboard');
Route::get('guest/rooms', [PageController::class, 'guestViewRoom'])->name('guest-viewroom');
Route::get('guest/rooms-details/{id}', [PageController::class, 'guestroomsdetails'])->name('guest-rooms-details');
Route::get('guest/profile', [PageController::class, 'profileView'])->name('profile-view');
Route::get('guest/room-booking/{id}', [PageController::class, 'guestBookingRoom'])->name('guest-booking-room');
Route::post('guest/room-booking/{id}', [PageController::class, 'guestBookingRoom2'])->name('guest-booking-room2');
Route::get('guest/profile/delete/{id}', [PageController::class, 'bookingCancel']);
Route::get('guest/profile/booking-details/{id}', [PageController::class, 'bookingDetails']);

// ................................manager-pages-start..................................................................................................
Route::get('manager/dashboard', [PageController::class, 'manager'])->name('manager-dashboard');
Route::get('manager/rooms', [PageController::class, 'managerViewRoom'])->name('manager-viewroom');
Route::get('manager/rooms-details/{id}', [PageController::class, 'managerroomsdetails'])->name('manager-rooms-details');
