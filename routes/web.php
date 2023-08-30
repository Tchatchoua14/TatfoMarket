<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//  Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
// welcome page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');

// Newsletter
Route::post('newsletter', [App\Http\Controllers\HomeController::class, 'subscribe'])->name('newsletter');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user-profile');
Route::post('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('user-profile-update');


# Socialite URLs

// Google
Route::get('/login/google/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback/', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
//Facebook
Route::get('/login/facebook/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/login/facebook/callback/', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
//Github
Route::get('/login/github/', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback/', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

// Route::get('/', 'HomeController@index')->name('user');

// Profile
// Route::get('/profile', 'App\Http\Controllers\HomeController@profile')->name('user-profile');
// Route::post('/profile/{id}', 'App\Http\Controllers\HomeController@profileUpdate')->name('user-profile-update');

 
    // Profile

    // Category
Route::resource('/category', CategoryController::class);

    // Product
Route::resource('/product', ProductController::class);
  

// route backend
// {{route('user.delete',[$user->id])}} 
// {{ route('user.detroy',$user->id) }} 


// profile user
Route::patch('/user', [UsersController::class, 'create'])->name('user.create');
Route::get('/user/edit', [UsersController::class, 'edit'])->name('user.edit');
Route::patch('/user', [UsersController::class, 'update'])->name('user.update');
Route::get('/user', [UsersController::class, 'destroy'])->name('user.destroy');
// Liste des utilisateurs
Route::get('/user/liste', [UsersController::class, 'index'])->name('liste');;

// Backend route
Route::get('/back/index', [BackController::class, 'index'])->name('index');
// Route::get('/back/user', [BackController::class, 'listeUser'])->name('listeUser');
Route::get('/voir', function () {
    return view('back.user.voir');
})->name('voir');

Route::get('/back/category', function () {
    return view('back.category');
})->name('category');
Route::get('/back/formcategory', function () {
    return view('back.formcategory');
})->name('formcategory');




// Page erroor
Route::fallback(function () {
    return view('font.404');
})->name('404');

// Route Fontend 

Route::group(['prefix' => '/font'], function () {

    Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
    Route::get('/home2', [HomeController::class, 'home2'])->name('home2');
    Route::get('/home3', [HomeController::class, 'home3'])->name('home3');
    Route::get('/home5', [HomeController::class, 'home5'])->name('home5');
    Route::get('/home6', [HomeController::class, 'home6'])->name('home6');
    Route::get('/home7', [HomeController::class, 'home7'])->name('home7');
    Route::get('/home8', [HomeController::class, 'home8'])->name('home8');
    Route::get('/home9', [HomeController::class, 'home9'])->name('home9');
    Route::get('/home10', [HomeController::class, 'home10'])->name('home10');
    Route::get('/home11', [HomeController::class, 'home11'])->name('home11');
    Route::get('/home12', [HomeController::class, 'home12'])->name('home12');
    Route::get('/home13', [HomeController::class, 'home13'])->name('home13');
    Route::get('/home14', [HomeController::class, 'home14'])->name('home14');
    Route::get('/home15', [HomeController::class, 'home15'])->name('home15');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/blog-article', [HomeController::class, 'home15'])->name('blog-article');
    Route::get('/blog-grid', [HomeController::class, 'bloGrid'])->name('blog-grid');
    Route::get('/blog-left', [HomeController::class, 'blogLeft'])->name('blog-left');
    Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
    Route::get('/cart1', [HomeController::class, 'cart1'])->name('cart1');
    Route::get('/compare2', [HomeController::class, 'compare2'])->name('compare2');
    Route::get('/compare1', [HomeController::class, 'compare1'])->name('compare1');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/look2', [HomeController::class, 'look2'])->name('look2');
    Route::get('/look1', [HomeController::class, 'look1'])->name('look1');
    Route::get('/produit-drop', [HomeController::class, 'produitdrop'])->name('produit-drop');
    Route::get('/produit-label', [HomeController::class, 'produitLabels'])->name('produit-labels');
    // Route::get('/produit-layout', [HomeController::class, 'produitLayout'])->name('produit-layout');
    Route::get('/produit-layout', [ProductController::class, 'show'])->name('produit-layout');
    Route::get('/produit-round', [HomeController::class, 'produitRound'])->name('produit-round');
    Route::get('/produit-video', [HomeController::class, 'produitvideo'])->name('produit-video');
    Route::get('/shop-description', [HomeController::class, 'shopDescription'])->name('shop-description');
    Route::get('/shop-right', [HomeController::class, 'shopRight'])->name('shop-right');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/shop1', [HomeController::class, 'shop1'])->name('shop1');
    Route::get('/blog-left', [HomeController::class, 'blogLeft'])->name('blog-left');
    Route::get('/collection', [HomeController::class, 'collection'])->name('collection');
    Route::get('/Terms', [HomeController::class, 'Terms'])->name('Terms');
    Route::get('/FAQ', [HomeController::class, 'FAQ'])->name('FAQ');
});
