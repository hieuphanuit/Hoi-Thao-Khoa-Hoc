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

Route::get('/','HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['admin.auth']], function () {
    Route::get('/admin/nguoi-thuyet-trinh', 'AdminDashBoardController@index_nguoi_thuyet_trinh')->name('admin.nguoi_thuyet_trinh');

    //
    Route::POST('admin/hoi-nghi','HoiNghiController@store');
    Route::GET('admin/hoi-nghi/create','HoiNghiController@create');
    Route::GET('admin/hoi-nghi','HoiNghiController@index');
   
    Route::POST('admin/hoi-nghi/{hoi_nghi}','HoiNghiController@update');
    Route::GET('admin/hoi-nghi/{hoi_nghi}','HoiNghiController@show');
    Route::GET('admin/hoi-nghi/{hoi_nghi}','HoiNghiController@profile');
    Route::DELETE('admin/hoi-nghi/{hoi_nghi}','HoiNghiController@destroy');
    Route::GET('admin/hoi-nghi/{hoi_nghi}/edit','HoiNghiController@edit');

    Route::GET('admin/bai-thuyet-trinh','BaiThuyetTrinhController@indexAdmin');

    Route::POST('admin/bai-thuyet-trinh-chap-nhan/{bai_thuyet_trinh}','BaiThuyetTrinhController@chapNhan');
    Route::POST('admin/bai-thuyet-trinh-huy-chap-nhan/{bai_thuyet_trinh}','BaiThuyetTrinhController@huyChapNhan');
    Route::GET('admin/nguoi-thuyet-trinh/{nguoi_thuyet_trinh}','UserController@profile');
});

Route::group(['middleware' => ['nguoiThuyetTrinh.auth']], function () {
 
 
    Route::GET('nguoi-thuyet-trinh/hoi-nghi','HoiNghiController@indexNguoiThuyetTrinh');
    Route::GET('nguoi-thuyet-trinh/hoi-nghi/{hoi_nghi}','HoiNghiController@showNguoiThuyetTrinh');
   
    Route::GET('nguoi-thuyet-trinh/bai-thuyet-trinh','BaiThuyetTrinhController@index');
    Route::POST('nguoi-thuyet-trinh/bai-thuyet-trinh/create','BaiThuyetTrinhController@create');
    Route::POST('nguoi-thuyet-trinh/bai-thuyet-trinh','BaiThuyetTrinhController@store');
});

Route::GET('bai-thuyet-trinh/{bai_thuyet_trinh}','BaiThuyetTrinhController@show');
Route::GET('hoi-nghi/{hoi_nghi}','HoiNghiController@show');

Route::POST('dang-ky-hoi-nghi','DangKyHoiNghiController@store');
Route::post('/search', 'SearchController@show');
