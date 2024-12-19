<?php

use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\uploadController;
use App\Http\Controllers\FrontendControler;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;

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
//phân quyền
Route::get('/login',[FrontendControler::class,'show_login']) ->name('login');
Route::POST('/ckeck_login',[FrontendControler::class,'ckeck_login']);

Route::middleware('auth') ->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get("/", function () { return view("admin.home");});
        Route::get("/product/list",[productController::class,'list_product']);
        Route::get("/order/list",[OrderController::class,'list_order']);
        Route::post("/product/add", [productController::class,'insert_product']);
        Route::get("/product/create",[productController::class,'add_product']);
        Route::get("/product/delete",[productController::class,'delete_product']);
        Route::get("/product/edit/{id}",[productController::class,'edit_product']);
        Route::post("/product/edit/{id}",[productController::class,'update_product']);
    });
});






/////////////home-admin////////////////////
// Route::post("/admin/product/add", [productController::class,'insert_product']);

// Route::get("/admin/product/create",[productController::class,'add_product']);



// Route::get("/admin/product/delete",[productController::class,'delete_product']);

// Route::get("/admin/product/edit/{id}",[productController::class,'edit_product']);

// Route::post("/admin/product/edit/{id}",[productController::class,'update_product']);



//order

Route::get('/admin/order/detail/{oder_detail}',[OrderController::class,'detail_order']);
Route::get('/order/confirm/{id}', function ($id) { return view('order.confim', ['id' => $id]);})->name('order.confirm');





Route::get("/order/confim",function(){return view("order.confim");});
Route::get("/order/success",function(){return view("order.success");});
Route::get("/product/{id}",[FrontendControler::class,'show_product']);
Route::get("/",[FrontendControler::class,'index']);
Route::post('/cart/add', [FrontendControler::class,'add_cart']);
Route::get('/cart',[FrontendControler::class,'show_cart']);
Route::get('/cart/delete/{id}',[FrontendControler::class,'delete_cart']);
Route::post('/cart/update', [FrontendControler::class,'update_cart']);
Route::post('/cart/send',[FrontendControler::class,'send_cart']);




///////////upload image//////////////////
Route::post('/upload',[uploadController::class,'uploadImage']);
Route::post('/uploads',[uploadController::class,'uploadImages']);

// routes/web.php

// Route để hiển thị form thêm slider
Route::get('/admin/slider/create', [SliderController::class, 'create'])->name('slider.create');

// Route để lưu slider vào database
Route::post('/admin/slider/store', [SliderController::class, 'store'])->name('slider.store');

