<?php

use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\FeedbackController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\Admin\RoomTypeController;
use App\Http\Controllers\Admin\UserDataController;
use App\Http\Controllers\Admin\RoomStyleController;
use App\Http\Controllers\User\RoomController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\User\ReservationSystemController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [UserController::class, 'index']);
Route::post('/login/user', [UserController::class, 'show']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register/user', [UserController::class, 'store']);
    
Route::get('/about', [BlogController::class, 'about']);

//room
Route::get('/room', [RoomController::class, 'index']);
Route::get('/room_detail/{id}', [RoomController::class, 'show'])->name('detail.room');

Route::get('/restaurant', [BlogController::class, 'restaurant']);

Route::get('/contact', [ContactController::class, 'index']);

//blog
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog_detail', [BlogController::class, 'show']);

//admin login
Route::get('/admin', [AdminController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.auth');


Route::prefix('/admin')->middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'show'])->name('admin.index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.home');

    Route::get('/user/data', [UserDataController::class, 'index'])->name('admin.data');
    Route::get('/add', [UserDataController::class, 'show'])->name('admin.row');
    Route::post('/add', [UserDataController::class, 'create'])->name('admin.submit');
    Route::get('/edit/{id}', [UserDataController::class, 'edit'])->name('admin.edit');
    Route::post('/edit/{id}', [UserDataController::class, 'update'])->name('admin.update');
    Route::get('/delete/{id}', [UserDataController::class, 'destroy'])->name('admin.delete');

    Route::get('/room/create', [RoomTypeController::class, 'create'])->name('room.type');
    Route::post('/room/create', [RoomTypeController::class, 'store'])->name('room.create');
    Route::get('/room/types', [RoomTypeController::class, 'index'])->name('room.show');
    Route::get('/room/edit/{id}', [RoomTypeController::class, 'edit'])->name('room.edit');
    Route::post('/room/edit/{id}', [RoomTypeController::class, 'update'])->name('room.update');
    Route::get('/room/delete/{id}', [RoomTypeController::class, 'destroy'])->name('room.delete');

    Route::get('/room/style', [RoomStyleController::class, 'create'])->name('room.style');
    Route::post('/room/style', [RoomStyleController::class, 'store'])->name('room.store');
    Route::get('/room/table', [RoomStyleController::class, 'index'])->name('room.table');
    Route::get('/room/list', [RoomStyleController::class, 'show'])->name('room.list');
    Route::get('/list/edit/{id}', [RoomStyleController::class, 'edit'])->name('list.edit');
    Route::post('/list/edit/{id}', [RoomStyleController::class, 'update'])->name('list.update');
    Route::get('/list/delete/{id}', [RoomStyleController::class, 'destroy'])->name('list.delete');

    Route::get('/about/create', [AboutController::class, 'create'])->name('about.detail');
    Route::post('/about/create', [AboutController::class, 'store'])->name('about.create');
    Route::get('/about/table', [AboutController::class, 'index'])->name('about.table');
    Route::get('/about/list', [AboutController::class, 'show'])->name('about.list');
    Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/edit/{id}', [AboutController::class, 'update'])->name('about.update');

    Route::get('/reservation/table', [ReservationController::class, 'create'])->name('reservation.table');
    
    Route::get('/restaurant/create', [ItemController::class, 'create'])->name('item.create');
    Route::post('/restaurant/create', [ItemController::class, 'store'])->name('item.store');
    Route::get('/restaurant/table', [ItemController::class, 'index'])->name('item.table');
    Route::get('/restaurant/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
    Route::post('/restaurant/edit/{id}', [ItemController::class, 'update'])->name('item.update');
    
    

});

Route::middleware(['auth:web'])->group(function () {
    Route::get('/reservationRoom', [ReservationSystemController::class, 'chooseRoom']);
    Route::post('/reservationRoom', [ReservationSystemController::class, 'store'])->name('reservation.store');
    Route::get('/reservationRoom', [ReservationSystemController::class, 'show'])->name('reservation.show');
    Route::get('/reservation', [ReservationSystemController::class, 'reservation']);
    Route::get('/feedback', [FeedbackController::class, 'index']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
   
});






