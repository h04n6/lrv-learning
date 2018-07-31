<?php

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

Route::get('khoa-hoc', function(){
    return "Xin chào các bạn";
});

Route::get('duc-hoang', function(){
    echo "Hoàng đẹp trai tỏa sáng";
});

//truyền tham số
Route::get('ho-ten/{ten}', function($ten){
    echo "Tên của bạn là: " . $ten;
});

Route::get('ngay-gio/{ngay}', function($ngay){
    echo "Ngày là:" . $ngay;
})->where(['ngay' => '[0-9]+']);

//định danh
Route::get('route1', ['as' => 'my-route', function(){
    echo "Định danh cho route1 là my-route";
}]);

Route::get('route2', function(){
    echo "Đây là route 2";
})->name('my-route-2');

Route::get('goi-route-1', function(){
    return redirect()->route('my-route-2');
});

//nhóm
Route::group(['prefix' => 'my-group'], function(){
    Route::get('user-1', function(){
        echo "User 1";
    });
    Route::get('user-2', function(){
        echo "User 2";
    });
    Route::get('user-3', function(){
        echo "User 3";
    });
});