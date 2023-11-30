<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Back_Pannel\FoodController;
use App\Http\Controllers\Font_pannel\HomeController;
use App\Http\Controllers\Back_pannel\TeamController;
use App\Http\Controllers\Back_pannel\AdminController;
use App\Http\Controllers\Back_pannel\WaiterController;
use App\Http\Controllers\Back_pannel\ManagerController;
use App\Http\Controllers\Font_pannel\FoodDetailController;
use App\Http\Controllers\Font_pannel\ReservationController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('fontend.home');
Route::get('/menu', [HomeController::class, 'menu'])->name('fontend.menu');
Route::get('/about', [HomeController::class, 'about'])->name('fontend.about');
Route::get('/booking', [HomeController::class, 'table'])->name('fontend.booking');
Route::get('/ourteam', [HomeController::class, 'ourteam'])->name('fontend.ourteam');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth', 'role:admin')->group(function () {

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// user function  routes...............
Route::get('/admin/user', [AdminController::class, 'show'])->name('admin.user.list');
Route::get('/admin/user/distroy/{id}', [AdminController::class, 'distroy'])->name('admin.user.distroy');

// foodmenu function  routes...............
Route::get('/admin/foodmenu', [FoodController::class, 'index'])->name('admin.food.list');
Route::get('/admin/foodmenu/create', [FoodController::class, 'create'])->name('admin.food.create');
Route::post('/admin/foodmenu/store', [FoodController::class, 'store'])->name('admin.food.store');
Route::get('/admin/foodmenu/edit/{id}', [FoodController::class, 'edit'])->name('admin.food.edit');
Route::post('/admin/foodmenu/update/{id}', [FoodController::class, 'update'])->name('admin.food.update');
Route::get('/admin/foodmenu/delete/{id}', [FoodController::class, 'delete'])->name('admin.food.delete');

//reservation routes........

Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('reservation.index');
Route::get('/admin/reservation/delete/{id}', [ReservationController::class, 'delete'])->name('reservation.delete');

//our team routes...........
Route::get('/ourteam/index', [TeamController::class, 'index'])->name('ourteam.index');
Route::get('/ourteam/create', [TeamController::class, 'create'])->name('ourteam.create');
Route::post('/ourteam/store', [TeamController::class, 'store'])->name('ourteam.store');
Route::get('/ourteam/edit/{id}', [TeamController::class, 'edit'])->name('ourteam.edit');
Route::post('/ourteam/update/{id}', [TeamController::class, 'update'])->name('ourteam.update');
Route::get('/ourteam/delete/{id}', [TeamController::class, 'delete'])->name('ourteam.delete');

});

Route::middleware('auth', 'role:manager')->group(function () {
Route::get('/manager/dashboard', [ManagerController::class, 'dashboard'])->name('manager.dashboard');
});

Route::middleware('auth','role:waiter')->group(function () {
Route::get('/waiter/dashboard', [WaiterController::class, 'dashboard'])->name('waiter.dashboard');
});

//reservation route ...........
Route::post('/admin/reservation', [ReservationController::class, 'store'])->name('reservation.store');






