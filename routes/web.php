<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware' => ['page_info']], function () {
    Route::get('/', [home\HomeController::class,'index']);
    // Route::get('/about', [home\HomeController::class,'about']);
    Route::get('/brand', [home\HomeController::class,'brand']);
    Route::get('/product', [home\HomeController::class,'product']);
    Route::get('/store', [home\HomeController::class,'store']);
    Route::get('/join', [home\HomeController::class,'join']);
    Route::get('/news', [home\HomeController::class,'news']);
    Route::get('/contacts', [home\HomeController::class,'contacts']);
    // Route::get('/team', [home\HomeController::class,'team']);
    // Route::get('/message', [home\HomeController::class,'message']);

    // Route::get('/mobile', [home\HomeController::class,'mobile']);
});


Route::get('/new_detail/{id}', [home\HomeController::class,'new_detail']);


Route::any('/createMessage', [home\MessageController::class,'create_message']);
Route::any('/get_createMessage', [home\MessageController::class,'create_message']);

//获取当前留言数的地址
Route::any('get_message_count', [home\MessageController::class,'get_message_count']);
