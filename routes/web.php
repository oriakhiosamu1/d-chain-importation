<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Cart as ControllersCart;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\VitalsController;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // men's products
    $men = Product::where('category', 'men')->latest()->take(3)->get();
    // women's products
    $women = Product::where('category', 'women')->latest()->take(3)->get();
    // kid's products
    $kids = Product::where('category', 'kids')->latest()->take(3)->get();
    return view('welcome', [
        'kids' => $kids,
        'women' => $women,
        'men' => $men,
    ]);
});

// ROUTE FOR GUEST USERS=======================================================================================================================
// 1. Route for Contact page
Route::get('/about', [GuestController::class, 'about'])->name('about');
// 2. Route for about us page
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
// 3. Route for men's page
Route::get('/men', [HomeController::class, 'pages'])->name('men.page');
// 4. Route for women's page
Route::get('/women', [HomeController::class, 'pages'])->name('women.page');
// 5. Route for kid's page
Route::get('/kids', [HomeController::class, 'pages'])->name('kids.page');

// ROUTE FOR GUEST USERS ENDS HERE============================================================================================================



// EMAIL VERIFICATION ROUTES====================================================================================================================================
// 1. returns the email verification notice
Route::get('/email/verify', [AuthController::class, 'verify'])->middleware('auth')->name('verification.notice');
// 2. Email Verification Handler
Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'handler'])->middleware(['auth', 'signed'])->name('verification.verify');
// 3. Resending the Verification Email
Route::post('/email/verification-notification', [AuthController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');
// EMAIL VERIFICATION ROUTES ENDS HERE============================================================================================================================


// PASSWORD RESET LINKS STARTS HERE=========================================================================================================================================
// 1. forget-password page
Route::get('/forget-password', [PasswordController::class, 'forget'])->middleware('guest')->name('password.request');
// 2. reset-password page
Route::get('/reset-password/{token}', [PasswordController::class, 'reset'])->middleware('guest')->name('password.reset');
// 3. route that handles the form submission request from the "forgot password" view
Route::post('/forget-password', [PasswordController::class, 'handleForgetPassword'])->middleware('guest')->name('password.email');
// handling form submission from the reset password page
Route::post('/reset-password', [PasswordController::class, 'handleResetPassword'])->middleware('guest')->name('password.update');
// PASSWORD RESET LINKS ENDS HERE==========================================================================================================================================================================


// AUTH USER ROUTES===============================================================================================================================================
Route::middleware(['auth', 'verified'])->group(function(){
    // 1. home page for authenticated users
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    // 2. login route redirects the user to home page with modal forms
    Route::get('/login', [HomeController::class, 'login'])->name('login');
});
// AUTH USER ROUTE ENDS HERE==========================================================================================================================


// ROUTES FOR VITALS START HERE: CART, HISTORY, BILLING ADDRESS==================================================================================================
Route::middleware(['auth', 'verified'])->group(function(){
    // 1. Route displays the billing address page
    Route::get('/billing-address', [VitalsController::class, 'billingAddress'])->name('billing.address');
    // 2. Route that handles reset password in billing address page
    Route::post('/change-password', [VitalsController::class, 'changePassword'])->name('reset.password');
    // 3. Route that handles billing address form
    Route::post('/billing-address', [VitalsController::class, 'storeBillingAddress'])->name('store.billing.address');
    // 4. Route for update/edit billing address
    Route::put('/billing-address/{id}', [VitalsController::class, 'updateBillingAddress'])->name('update.billing.address');

});
// ROUTES FOR VITALS END HERE================================================================================================================================




// ROUTE FOR CART =========================================================================================================================
// ========================================================================================================================================
// 1. Route adds product to cart
Route::post('/add-to-cart/{productId}', [ControllersCart::class, 'addToCart'])->name('store.cart');
// 2. Route for user's cart
Route::get('/cart', [ControllersCart::class, 'cart'])->name('cart');
// 3. Route that handles editing of cart
Route::put('/cart/update/{cartId}', [ControllersCart::class, 'update'])->name('update.cart');
// 4. Route that handles deleting of cart product
Route::get('/cart/delete/{cartId}', [ControllersCart::class, 'remove'])->name('delete.cart');

// ROUTE FOR CART ENDS =====================================================================================================================



// ADMIN ROUTES STARTS HERE====================================================================================================================
// ============================================================================================================================================

// 1. Route returns admin dashboard upon login or registration
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
// 2. Route displays users billing address from the admin panel
Route::get('/admin/user-billing-address/{userId}', [DashboardController::class, 'userBillingAddress'])->name('admin.user.billing.address');
// 3. Route displays notify user account from admin panel
Route::get('/admin/notify/{userId}', [DashboardController::class, 'notify'])->name('admin.notify');
// 4. Deletes user account from the admin panel
Route::get('/admin/delete/{userId}', [DashboardController::class, 'delete'])->name('admin.delete');
// 5. Admin sign out function
Route::get('/admin/logout', [DashboardController::class, 'logout'])->name('logout');
// 6. Route handles sending user notification message
Route::post('/admin/notification/{userId}', [DashboardController::class, 'sendNotification'])->name('admin.notification');


// ADMIN ROUTES FOR ADDING PRODUCTS===============================================================================================================
// ===================================================================================================================================================

// 1. Route returns add product page
Route::get('/admin/add-product', [ProductController::class, 'products'])->name('admin.add-product');
// 2. Route that handles add-product form submission
Route::post('/admin/add-product', [ProductController::class, 'storeProducts'])->name('admin.store-product');
// 3. Route that shows all products
Route::get('/admin/all-product', [ProductController::class, 'allProducts'])->name('admin.all-product');
// 4. Route that edits a particular product
Route::get('/admin/edit-product/{productId}', [ProductController::class, 'editProducts'])->name('admin.edit-product');
// 5. Route that deletes a particular product
Route::get('/admin/delete-product/{productId}', [ProductController::class, 'deleteProducts'])->name('admin.delete-product');
// 6. Route that shows a single product
Route::get('/admin/show-product/{productId}', [ProductController::class, 'showProducts'])->name('admin.show-product');
// 7. Route that handles editing a single product
Route::put('/admin/edit-single-product/{productId}', [ProductController::class, 'editSingleProduct'])->name('admin.edit-single-product');


// ADMIN ROUTES ENDS HERE======================================================================================================================
// ============================================================================================================================================
