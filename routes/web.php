<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\NewsletterController;
// use App\Http\Controllers\MesssageController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NotchPayCallBackController;

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


// Profile User
Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Home Page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');
// Welcome Page
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

#Localization Multi-langue
Route::get('locale', [LocalizationController::class, 'getLang'])->name('getlang');
Route::get('locale/{lang}', [LocalizationController::class, 'setLang'])->name('setlang');


# Socialite URLs

// Google
Route::get('auth/google', [App\Http\Controllers\Auth\LoginController::class, 'googleRedirect']);
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'loginWithGoogle']);

//Facebook
Route::get('auth/facebook', [App\Http\Controllers\Auth\LoginController::class, 'facebookRedirect']);
Route::get('/auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'loginWithFacebook']);

//Github
Route::get('auth/github', [App\Http\Controllers\Auth\LoginController::class, 'githubRedirect']);
Route::get('/auth/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'loginWithGithub']);

// Route Backend App

Route::group(['prefix' => '/back'], function () {
    // Home Backend
    Route::get('/index', [BackController::class, 'index'])->name('index');
    // Liste des utilisateurs
    Route::resource('/user', UserController::class);
    //Liste Shippings
    Route::get('/shipping', [ShippingController::class, 'index'])->name('shipping.index');
    Route::get('/shipping/edit', [ShippingController::class, 'edit'])->name('shipping.edit');
    //Liste des commandes
    Route::get('/order', [OrderController::class, 'index'])->name('order.index'); 
    // liste des messages
    Route::get('/message', [MessageController::class, 'index'])->name('message.index');
});


// Page Error
Route::fallback(function () {
    return view('font.404');
})->name('404');

// Route Fontend App

Route::group(['prefix' => '/font'], function () {

    // Category
    Route::resource('/category', CategoryController::class);
    // Product
    Route::resource('/product', ProductController::class);
    Route::get('/product/{product}/edit1', [ProductController::class, 'edit1'])->name('product.edit1');
    // Newsletter
    Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
    Route::delete('/newsletter/{newsletter}', [NewsletterController::class, 'destroy'])->name('newsletter.destroy');
    Route::get('/newsletter', [NewsletterController::class, 'index'])->name('liste-news');
        
    // Add-To-Cart  Darylecode/cart
    Route::get( '/cart' , [CartController::class, 'cartList' ])->name( 'cart.list' );
    Route::post( '/cart' , [CartController::class, 'addToCart' ])->name( 'cart.store' );
    Route::post( '/update-cart' , [CartController::class, 'updateCart' ])->name( 'cart.update' );
    Route::post( '/remove' , [CartController::class, 'removeCart' ])->name( 'cart.remove' );
    Route::post( '/clear' , [CartController::class, 'clearAllCart' ])->name( 'cart.clear' );
    //Liste des souhaits  // Wishlist
    Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
    Route::post('/wishlist', [WishlistController::class, 'addWishList'])->name('wishlist.store');
    // Checkout
    Route::get('/checkout', [HomeController::class, 'checkout'])->middleware(['auth', 'verified'])->name('checkout');
    Route::get('/', [HomeController::class, 'store'])->name('checkout.store'); 
    // Barre de recherche 
    Route::get('/search', [HomeController::class, 'search'])->name('search'); 
    Route::get('/home2', [HomeController::class, 'home2'])->name('home2');
    Route::get('/home5', [HomeController::class, 'home5'])->name('home5');
    Route::get('/home7', [HomeController::class, 'home7'])->name('home7');
    Route::get('/home8', [HomeController::class, 'home8'])->name('home8');
    Route::get('/home11', [HomeController::class, 'home11'])->name('home11');
    Route::get('/home13', [HomeController::class, 'home13'])->name('home13');
    Route::get('/home14', [HomeController::class, 'home14'])->name('home14');
    Route::get('/home15', [HomeController::class, 'home15'])->name('home15'); 
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/compare1', [HomeController::class, 'compare1'])->name('compare1');
    // Route::get('/contact', [HomeController::class, 'contact'])->name('contact1');
    Route::get('/produit-layout', [ProductController::class, 'show'])->name('produit-layout');
    Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
    Route::get('/collection', [HomeController::class, 'collection'])->name('collection');
    Route::get('/Terms', [HomeController::class, 'Terms'])->name('Terms');
    Route::get('/FAQ', [HomeController::class, 'FAQ'])->name('FAQ');
    Route::get('/compte', [HomeController::class, 'compte'])->name('compte');
    Route::get('/adresse', [HomeController::class, 'adresse'])->name('adresse');
    Route::get('/mail', [HomeController::class, 'mail'])->name('mail');
    Route::get('/commande', [HomeController::class, 'commande'])->name('commande');
    Route::get('/liste', [HomeController::class, 'order'])->name('order');
    Route::post('/orders', [OrderController::class, 'store'])->name('order.store');
    Route::get('/order', [OrderController::class, 'create'])->name('order.create');
    Route::get('/message1', [App\Http\Controllers\MessageController::class, 'create'])->name('contact.create'); 
    Route::get('/message2', [App\Http\Controllers\MessageController::class, 'index'])->name('message.index');
    Route::delete('/message/{message}', [App\Http\Controllers\MessageController::class, 'destroy'])->name('message.destroy');  
    Route::post('/message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store'); 
});



// Payment Notchpay
Route::get('payment', PaymentController::class)->name('payment');
Route::get('callback-payment', NotchPayCallBackController::class)->name('notchpay-callback');
Route::get('payment/{product}', [PaymentController::class, 'produit'])->name('payment1');