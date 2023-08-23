<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Newsletter
Route::post('newsletter', [HomeController::class, 'subscribe'])->name('newsletter');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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

Route::get('/', 'HomeController@index')->name('user');
// Profile
Route::get('/profile', 'HomeController@profile')->name('user-profile');
Route::post('/profile/{id}', 'HomeController@profileUpdate')->name('user-profile-update');

 
    // Profile
// Route::get('/profile', 'AdminController@profile')->name('admin-profile');
// Route::post('/profile/{id}', 'AdminController@profileUpdate')->name('profile-update');
    // Category
Route::resource('/category', 'CategoryController');
    // Product
Route::resource('/product', 'ProductController');
    // Ajax for sub category

// route backend


// profile user
Route::patch('/user', [UsersController::class, 'create'])->name('user.create');
Route::get('/user', [UsersController::class, 'edit'])->name('user.edit');
Route::patch('/user', [UsersController::class, 'index'])->name('user.index');


Route::get('/back/index', function () {
    return view('back.index');
})->name('index'); 
Route::get('/back/produit', function () {
    return view('back.produit');
})->name('produit');
Route::get('/back/produitUpdate', function () {
    return view('back.produitUpdate');
})->name('produitUpdate');
Route::get('/back/produitdetail', function () {
    return view('back.produitdetail');
})->name('produitdetail');
Route::get('/back/detailuser', function () {
    return view('back.detailuser');
})->name('detailuser');
Route::get('/back/detailuser1', function () {
    return view('back.detailuser');
})->name('detailuser1');
Route::get('/back/formproduit', function () {
    return view('back.formproduit');
})->name('formproduit');
Route::get('/back/profile', function () {
    return view('back.profile');
})->name('profile');
Route::get('/back/user', function () {
    return view('back.user');
})->name('user');
Route::get('/back/formuser', function () {
    return view('back.formuser');
})->name('formuser');
Route::get('/back/category', function () {
    return view('back.category');
})->name('category');
Route::get('/back/formcategory', function () {
    return view('back.formcategory');
})->name('formcategory');

// route font end

// Route::get('/font/index', function () {
//     return view('font.index');
// })->name('index');
Route::get('/font/wishlist', function () {
    return view('font.wishlist');
})->name('wishlist');
Route::get('/font/checkout', function () {
    return view('font.checkout');
})->name('checkout');
Route::get('/font/home2', function () {
    return view('font.home2');
})->name('home2');
Route::get('/font/home3', function () {
    return view('font.home3');
})->name('home3');
Route::get('/font/home5', function () {
    return view('font.home5');
})->name('home5');
Route::get('/font/home6', function () {
    return view('font.home6');
})->name('home6');
Route::get('/font/home7', function () {
    return view('font.home7');
})->name('home7');
Route::get('/font/home8', function () {
    return view('font.home8');
})->name('home8');
Route::get('/font/home9', function () {
    return view('font.home9');
})->name('home9');
Route::get('/font/home10', function () {
    return view('font.home10');
})->name('home10');
Route::get('/font/home11', function () {
    return view('font.home11');
})->name('home11');
Route::get('/font/home12', function () {
    return view('font.home12');
})->name('home12');
Route::get('/font/home13', function () {
    return view('font.home13');
})->name('home13');
Route::get('/font/home14', function () {
    return view('font.home14');
})->name('home14');
Route::get('/font/home15', function () {
    return view('font.home15');
})->name('home15');
Route::fallback(function () {
    return view('font.404');
})->name('404');
Route::get('/font/about', function () {
    return view('font.about');
})->name('about');
Route::get('/font/blog-article', function () {
    return view('font.blog-article');
})->name('blog-article');
Route::get('/font/blog-grid', function () {
    return view('font.blog-grid');
})->name('blog-grid');
Route::get('/font/blog-left', function () {
    return view('font.blog-left');
})->name('blog-left');
Route::get('/font/cart', function () {
    return view('font.cart');
})->name('cart');
Route::get('/font/cart1', function () {
    return view('font.cart1');
})->name('cart1');
Route::get('/font/compare2', function () {
    return view('font.compare2');
})->name('compare2');
Route::get('/font/compare1', function () {
    return view('font.compare1');
})->name('compare1');
Route::get('/font/contact', function () {
    return view('font.contact');
})->name('contact');
Route::get('/font/look2', function () {
    return view('font.look2');
})->name('look2');
Route::get('/font/look1', function () {
    return view('font.look1');
})->name('look1');
Route::get('/font/produit-drop', function () {
    return view('font.produit-drop');
})->name('produit-drop');
Route::get('/font/produit-label', function () {
    return view('font.produit-labels');
})->name('produit-labels');
Route::get('/font/produit-layout', function () {
    return view('font.produit-layout');
})->name('produit-layout');
Route::get('/font/produit-round', function () {
    return view('font.produit-round');
})->name('produit-round');
Route::get('/font/produit-video', function () {
    return view('font.produit-video');
})->name('produit-video');
Route::get('/font/shop-description', function () {
    return view('font.shop-description');
})->name('shop-description');
Route::get('/font/shop-right', function () {
    return view('font.shop-right');
})->name('shop-right');
Route::get('/font/shop', function () {
    return view('font.shop');
})->name('shop');
Route::get('/font/shop1', function () {
    return view('font.shop1');
})->name('shop1');
Route::get('/font/blog-left', function () {
    return view('font.blog-left');
})->name('blog-left');
Route::get('/font/collection', function () {
    return view('font.collection');
})->name('collection');
Route::get('/font/compteuser', function () {
    return view('font.compteuser');
})->name('compteuser');
Route::get('/font/infouser', function () {
    return view('font.infouser');
})->name('infouser');

