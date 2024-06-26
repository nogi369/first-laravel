<?php

// インポート文
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MiddlewareController;
// use App\Http\Controllers\HelloController;

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
//   return view('welcome');
// });

Route::get('/', [TestController::class, 'index']);
Route::post('/', [TestController::class, 'post']);
Route::get('/middleware', [MiddlewareController::class, 'index']);
// Route::post('/middleware', [MiddlewareController::class, 'post'])->middleware('first');
Route::post('/middleware', [MiddlewareController::class, 'post']);
// クエリパラメータ
// Route::get('/test', [TestController::class, 'index']);
// Route::get('/test/{room}/{id}', [TestController::class, 'index']);
// Route::get('/test/{text?}', [TestController::class, 'index']);
// アドレス部分に{パラメータ名}を指定することで、パラメータを受け付けるルーティングを設定
// Route::get('/test/{text}', [TestController::class, 'index']); // 必須パラメータ
// Route::get('/test/{text?}', [TestController::class, 'index']); // 任意パラメータ
// Route::get('/hello', [HelloController::class, 'index']);