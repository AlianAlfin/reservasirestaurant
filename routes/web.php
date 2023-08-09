<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryBlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\CategoryBlogController as FrontendCategoryBlogController;
use App\Http\Controllers\Frontend\TableController as FrontendTableController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
use App\Http\Controllers\Frontend\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/menu', function () {
    return view('menu');
});
Route::get('/aboutme', function () {
    return view('aboutme');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/privacy', function () {
    return view('privacy');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('Admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/category_blogs', CategoryBlogController::class);
    Route::resource('/blogs', BlogController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/reservations', ReservationController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/contacts', ContactController::class);
});

Route::get('/categories', [FrontendCategoryController::class, 'index'])->name('categories.index');
Route::get('/category_blogs', [FrontendCategoryBlogController::class, 'index'])->name('category_blogs.index');
Route::get('/categories/{category}', [FrontendCategoryController::class, 'show'])->name('categories.show');
Route::get('/category_blogs/{categoryBlog}', [FrontendCategoryBlogController::class, 'show'])->name('category_blogs.show');
Route::get('/menus', [FrontendMenuController::class, 'index'])->name('menus.index');
Route::get('/tables', [FrontendTableController::class, 'index'])->name('tables.index');
Route::get('/reservations/step-one', [FrontendReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservations/step-one', [FrontendReservationController::class, 'StoreStepOne'])->name('reservations.store.step.one');
Route::get('/reservations/step-two', [FrontendReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservations/step-two', [FrontendReservationController::class, 'StoreStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');


require __DIR__ . '/auth.php';
