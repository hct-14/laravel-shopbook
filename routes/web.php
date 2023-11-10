<?php
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController1;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\DienDanController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OderController;
use App\Http\Controllers\Vnpay_VnpaypaymentController;
use App\Http\Controllers\LoginWithGoogleController;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Product_1Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;



    



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/trang chu', [HomeController::class,'index'])->name('trang-chu');

Route::get('/layout2', [HomeController::class,'layout'])->name('llayout');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/dashboard', [AdminController::class, 'show_dashboard'])->name('admin');
Route::match(['get', 'post'], '/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin');
Route::get('/logout', [AdminController::class, 'logout'])->name('admin');

// category-product
Route::get('/edit-category-product/{category_product_id}', [CategoryProductController::class, 'editCategoryProduct'])->name('add-category');
Route::get('/delete-category-product/{category_product_id}', [CategoryProductController::class, 'deleteCategoryProduct'])->name('add-category');
    

Route::get('/add-category-product', [CategoryProductController::class, 'addCategoryProduct'])->name('add-category');
Route::get('/all-category-product', [CategoryProductController::class, 'allCategoryProduct'])->name('all-category');
Route::get('/unactive-category-product/{category_product_id}', [CategoryProductController::class, 'unactive_category_product'])->name('unactive-category-product');
Route::get('/active-category-product/{category_product_id}', [CategoryProductController::class, 'active_category_product'])->name('active');
 Route::match(['get', 'post'], '/save-category-product', [CategoryProductController::class, 'save_category_product'])->name('save_category');
Route::match(['get', 'post'], '/update-category-product/{category_product_id}', [CategoryProductController::class, 'update_category_product'])->name('save_category');

//brand-product
Route::get('/edit-brand-product/{brand_product_id}', [BrandProductController::class, 'editbrandProduct'])->name('add-brand');
Route::get('/delete-brand-product/{brand_product_id}', [BrandProductController::class, 'deletebrandProduct'])->name('add-brand');
    
Route::get('/add-brand-product', [BrandProductController::class, 'add_Brand_Product'])->name('add-brand');
Route::get('/all-brand-product', [BrandProductController::class, 'allbrandProduct'])->name('all-brand');
Route::get('/unactive-brand-product/{brand_product_id}', [BrandProductController::class, 'unactive_brand_product'])->name('unactive-brand-product');
Route::get('/active-brand-product/{brand_product_id}', [BrandProductController::class, 'active_brand_product'])->name('active');
 
Route::match(['get', 'post'], '/save-brand-product', [BrandProductController::class, 'save_brand_product'])->name('save_brand');
Route::match(['get', 'post'], '/update-brand-product/{brand_product_id}', [BrandProductController::class, 'update_brand_product'])->name('save_brand');


//product
Route::get('/edit-product/{product_id}', [BrandProductController::class, 'editProduct'])->name('add');
Route::get('/delete-product/{product_id}', [ProductController::class, 'deleteProduct'])->name('add');
    
Route::get('/add-product', [CategoryProductController::class, 'addCategoryProduct'])->name('add');
Route::get('/all-product', [CategoryProductController::class, 'allCategoryProduct'])->name('all');
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product'])->name('unactive-product');
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product'])->name('active');
 
Route::match(['get', 'post'], '/save-product', [ProductController::class, 'save_product'])->name('save_');
Route::match(['get', 'post'], '/update-product/{product_id}', [ProductController::class, 'update_product'])->name('save_brand');


//product_1
Route::get('/edit-product-1/{product_id}', [Product_1Controller::class, 'editProduct_1'])->name('add');
Route::get('/delete-product/{product_1_id}', [Product_1Controller::class, 'deleteProduct_1'])->name('add');
    
Route::get('/add-product-1', [Product_1Controller::class, 'addProduct_1'])->name('add');
Route::get('/all-product-1', [Product_1Controller::class, 'allProduct_1'])->name('all');
Route::get('/unactive-product-1/{product_1_id}', [Product_1Controller::class, 'unactiveProduct_1'])->name('unactive-product');
Route::get('/active-product-1/{product_1_id}', [Product_1Controller::class, 'activeProduct_1'])->name('active');
 
Route::match(['get', 'post'], '/save-product-1', [Product_1Controller::class, 'saveProduct_1'])->name('save_');
Route::match(['get', 'post'], '/update-product-1/{product_1_id}', [Product_1Controller::class, 'updateProduct_1'])->name('save_brand');

//danh muc san pham trang chu   
Route::get('/danh-muc-san-pham/{product_id}', [Product_1Controller::class, 'show_category_home'])->name('show');
Route::get('/chi-tiet-book/{product_id}', [Product_1Controller::class, 'detail_product'])->name('book???');
Route::get('/chi-tiet', [Product_1Controller::class, 'detail_product'])->name('book???');

//cart
// Route::get('/home', [BookController::class, 'index']);  
// Route::get('/shopping-cart', [BookController::class, 'bookCart'])->name('shopping.cart');
// Route::get('/AddToCart/{product_id}', [BookController::class, 'addBooktoCart'])->name('addbook.to.cart');
// Route::patch('/update-shopping-cart', [BookController::class, 'updateCart'])->name('update.sopping.cart');
// Route::delete('/delete-cart-product', [BookController::class, 'deleteProduct'])->name('delete.cart.product');
// Route::post('/product/gio-hang','CartController@giohang');
    Route::get('/show-cart1', [CartController::class, 'xemgiohang'])->name('cart');
    Route::get('/delete-cart/{id}', [CartController::class, 'xoasanpham'])->name('dalete-cart');

    Route::match(['get', 'post'],'/show-cart', [CartController::class, 'giohang'])->name('show-cart');
    Route::get('/cart', 'CartController@giohang')->middleware('user.login');

// Route::post('product/gio-hang', [CartController::class, 'product/gio-hang'])->name('add');
// Route::post('product/gio-hang', 'YourContCartControllerroller@giohang')->name('product.giohang');

//checkout
    route::match(['get', 'post'], '/save-checkout',[CheckOutController::class, 'Save_Checkout'])->name('sava-check-out');




//user
Route::match(['get', 'post'],'/user-login-hct', [UserController::class, 'user_login'])->name('login');
Route::match(['get', 'post'], '/user-res', [UserController::class, 'register'])->name('res');
// Route::get('/user-login', [UserController::class, 'index'])->name('admin');
Route::get('/user-res', [UserController::class, 'index1'])->name('admin');
Route::get('/checkout', [CheckOutController::class, 'CheckOut'])->name('admin');

Route::get('/add-user', [Product_1Controller::class, 'registerForm'])->name('add');

// Route::group(['middleware' => 'session'], function () {
//     route::match(['get', 'post'], '/save-checkout',[CheckOutController::class, 'Save_Checkout'])->name('sava-check-out');
// });

Route::get('/save-checkout', [CheckOutController::class, 'Save_Checkout'])->name('admin');

    // route::match(['get', 'post'], '/save-checkout',[CheckOutController::class, 'Save_Checkout'])->name('sava-check-out');
    Route::get('/order-finall', [CheckOutController::class, 'ThongTin'])->name('ASDFGNB');

    Route::get('/test', [CheckOutController::class, 'Deltai_Order'])->name('admin');


    Route::match(['get', 'post'], '/search', [SearchController::class, 'IndexSearch'])->name('IndexSearch');

    // Route::get('/process-data', [Product_1Controller::class, 'processData'])->name('processData');
    Route::match(['get', 'post'], '/process-data', [Product_1Controller::class, 'processData'])->name('IndexSearch');

    Route::match(['get', 'post'], '/checkcomment', [Product_1Controller::class, 'checkcomment'])->name('IndexSearch');
    Route::match(['get', 'post'], '/diendan', [DienDanController::class, 'DiendanIndex'])->name('IndexSearch');
    Route::get('/index-dien-dan', [DienDanController::class, 'IndexDien'])->name('ưert');
    Route::match(['get', 'post'], '/CheckDienDan', [DienDanController::class, 'CheckDienDan'])->name('IndexSearch');

    Route::match(['get', 'post'], '/testdd', [DienDanController::class, 'testdd'])->name('IndexSearch');
    Route::get('/userlogout', [UserController::class, 'userlogout'])->name('admin');


    Route::get('/check-order', [OderController::class, 'OderCheck'])->name('admin');

    Route::get('/unactive/{order_id}', [OderController::class, 'unactive'])->name('un');
    Route::get('/active/{order_id}', [OderController::class, 'active'])->name('ac');


    Route::match(['get', 'post'], '/kiem-tra-hang/{userId}', [OderController::class, 'CheckHang'])->name('IndexSearch');

    Route::match(['get', 'post'], '/sua-thong-tin', [OderController::class, 'SuaThongTin'])->name('SuaThongTin');

    Route::get('/Xoa-order/{order}', [OderController::class, 'deleteOrder'])->name('un');
    // Route::delete('/orders/{order}','OderController@delete')->name('deleteOrder');


    Route::get('/unactive1/{product_id}', [OderController::class, 'unactive1'])->name('un');
    Route::get('/active1/{product_id}', [OderController::class, 'active1'])->name('ac');


    Route::get('/VNPAY', [Vnpay_VnpaypaymentController::class, 'VN_pay'])->name('ac');
    Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
        $categories = DB::table('tblcategory')->orderBy('category_id', 'desc')->get();

        return view('pages.home', ['categories' => $categories]);
    })->name('/');
      
    Route::controller(LoginWithGoogleController::class)->group(function(){
        Route::get('authorized/google', 'redirectToGoogle')->name('auth.google');
        Route::get('authorized/google/callback', 'handleGoogleCallback');
    });