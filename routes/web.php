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
// Route::get('/back/detailuser1', function () {
//     return view('back.detailuser');
// })->name('detailuser1');
Route::get('/back/formproduit', function () {
    return view('back.formproduit');
})->name('formproduit');
// Route::get('/back/profile', function () {
//     return view('back.profile');
// })->name('profile');
// Route::get('/back/formuser', function () {
//     return view('back.formuser');
// })->name('formuser');

Route::get('/back/produit', function () {
    return view('back.produit');
})->name('produit');
Route::get('/back/produitUpdate', function () {
    return view('back.produitUpdate');
})->name('produitUpdate');
Route::get('/back/produitdetail', function () {
    return view('back.produitdetail');
})->name('produitdetail');

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
Route::get('/font/Terms', function () {
    return view('font.Terms');
})->name('Terms');


