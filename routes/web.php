<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CheckoutController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\SubController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WhislistController;
use Illuminate\Support\Facades\Route;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')
    ->name('user.')
    ->group(function () {
        Route::middleware(['guest:web', 'PreventBackHistory'])->group(
            function () {
                Route::view('/login', 'dashboard.user.login')->name('login');
                Route::view('/register', 'dashboard.user.register')->name(
                    'register'
                );
                Route::post('/create', [UserController::class, 'create'])->name(
                    'create'
                );
                Route::post('/check', [UserController::class, 'check'])->name(
                    'check'
                );
            }
        );

        Route::middleware(['auth:web', 'PreventBackHistory'])->group(
            function () {
                Route::get('/home', [UserController::class, 'home'])->name(
                    'home'
                );
                Route::post('/logout', [UserController::class, 'logout'])->name(
                    'logout'
                );
                Route::get('view_category/{slug}', [
                    UserController::class,
                    'view_category',
                ]);
                Route::get('cat/{subcategory}/{category}', [
                    UserController::class,
                    'viewcategory',
                ]);
                Route::get('view_subcategory/{categories}/{subcategory}', [
                    UserController::class,
                    'view_subcategory',
                ]);
                Route::get('/product/{subcategory_slug}/{product_slug}', [
                    UserController::class,
                    'display_product',
                ]);
                Route::get('product_details/{slug}', [UserController::class, 'detailsviews']);
                Route::post('add_to_cart', [
                    CartController::class,
                    'addProduct',
                ]);
                Route::get('view_cart', [CartController::class, 'index']);
                Route::post('delete_cart_item', [
                    CartController::class,
                    'destroy',
                ]);
                Route::post('update_cart', [CartController::class, 'update']);
                Route::get('/checkout', [
                    CheckoutController::class,
                    'index',
                ])->name('checkout');
                Route::post('/placeOrder', [
                    CheckoutController::class,
                    'placeOrder',
                ])->name('placeOrder');
                Route::get('/user_details', [
                    UserController::class,
                    'userindex',
                ])->name('user_details');
                Route::get('/categories', [
                    UserController::class,
                    'category',
                ])->name('categories');
                Route::get('/add_details', [
                    UserController::class,
                    'add_details',
                ])->name('add_details');
                Route::post('/create_userdetails', [
                    UserController::class,
                    'add_user_details',
                ])->name('create_userdetails');
                Route::get('/details_product/{slug}', [
                    ProductController::class,
                    'detail',
                ]);
                Route::get('/viewdetails/{slug}', [UserController::class, 'details']);
                Route::get('/viewOrders', [
                    OrderController::class,
                    'viewOrders',
                ])->name('viewOrders');
                Route::get('/whislist', [
                    WhislistController::class,
                    'index',
                ])->name('whislist');
                Route::post('/add_to_whislist', [
                    WhislistController::class,
                    'add_to_whislist',
                ])->name('add_to_whislist');

                Route::post('delete_wishlist', [
                    WhislistController::class,
                    'delete_wishlist',
                ]);
                Route::get('load_cart_data', [
                    CartController::class,
                    'cartcount',
                ]);
                Route::get('load-wishlist-count', [
                    WhislistController::class,
                    'whislist_count',
                ]);
                Route::get('viewProduct', [
                    ProductController::class,
                    'viewProduct',
                ])->name('viewProduct');
                Route::post('proceed-to-pay', [
                    PaymentController::class,
                    'razorpaycheck',
                ]);
            }
        );
    });
Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::middleware(['guest:admin', 'PreventBackHistory'])->group(
            function () {
                Route::view('/login', 'dashboard.admin.login')->name('login');
                Route::post('/check', [AdminController::class, 'check'])->name(
                    'check'
                );
            }
        );

        Route::middleware(['auth:admin', 'PreventBackHistory'])->group(
            function () {
                Route::view('/home', 'dashboard.admin.home')->name('home');
                Route::get('/category', [
                    CategoryController::class,
                    'index',
                ])->name('category');
                Route::get('/add_category', [
                    CategoryController::class,
                    'viewcat',
                ])->name('add_category');
                Route::post('/logout', [
                    AdminController::class,
                    'logout',
                ])->name('logout');
                Route::post('/create_category', [
                    CategoryController::class,
                    'create_category',
                ])->name('create_category');
                // Route::view('/product','dashboard.admin.product.index')->name('product');
                Route::get('/product', [
                    ProductController::class,
                    'index',
                ])->name('product');
                Route::get('/add_product', [
                    ProductController::class,
                    'add_product',
                ])->name('add_product');
                Route::post('/create_product', [
                    ProductController::class,
                    'create_product',
                ])->name('create_product');
                Route::get('/seller', [SellerController::class, 'index'])->name(
                    'seller'
                );
                Route::get('/add_seller', [
                    SellerController::class,
                    'create',
                ])->name('add_seller');
                Route::post('/create_seller', [
                    SellerController::class,
                    'store',
                ])->name('create_seller');
                Route::get('/features', [
                    FeatureController::class,
                    'index',
                ])->name('features');
                Route::get('add_feature/{id}', [
                    FeatureController::class,
                    'add_feature',
                ])->name('add_feature');
                Route::post('/create_feature', [
                    FeatureController::class,
                    'store',
                ])->name('create_feature');
                Route::get('/trending', [
                    CategoryController::class,
                    'trending',
                ])->name('trending');
                Route::get('/edit_category/{id}', [
                    CategoryController::class,
                    'edit',
                ])->name('edit_category');
                Route::put('/update_category/{id}', [
                    CategoryController::class,
                    'update',
                ]);
                Route::delete('delete_category/{id}', [
                    CategoryController::class,
                    'destroy',
                ]);
                Route::get('/edit_product/{id}', [
                    ProductController::class,
                    'edit',
                ])->name('edit_product');
                Route::put('/update_product/{id}', [
                    ProductController::class,
                    'update',
                ]);
                Route::delete('delete_product/{id}', [
                    ProductController::class,
                    'destroy',
                ]);
                Route::get('/view_products/{slug}', [
                    UserController::class,
                    'view_products',
                ]);
                Route::get('/order', [AdminController::class, 'order'])->name(
                    'order'
                );

                Route::get('/groups', [GroupController::class, 'index'])->name(
                    'groups'
                );
                Route::view(
                    '/add_groups',
                    'dashboard.admin.groups.add_groups'
                )->name('add_groups');
                Route::post('/create_groups', [
                    GroupController::class,
                    'create_groups',
                ])->name('create_groups');
                //Sub Category section
                Route::get('/sub_category', [
                    SubController::class,
                    'index',
                ])->name('sub_category');
                Route::get('/add_sub_category', [
                    SubController::class,
                    'create',
                ])->name('add_sub_category');
                Route::post('/create_subcategory', [
                    SubController::class,
                    'store',
                ])->name('create_subcategory');
            }

        );
    });

Route::get('razorpay', [PaymentController::class, 'razorpay'])->name(
    'razorpay'
);
Route::post('razorpaypayment', [PaymentController::class, 'payment'])->name(
    'payment'
);
