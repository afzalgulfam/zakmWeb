<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/about_us', function () {
    return view('about');
});



Route::get('/Pricing', function () {
    return view('prg');
});


Route::get('/Features', function () {
    return view('fch');
});

Route::get('/Contact', function () {
    return view('cont');
});

Route::get('/Career', function () {
    return view('cer');
});







// Route::get('/admin', function () {
//     return view('admin.index');
// });



Route::get('//Privacy_Policy', function () {
    return view('privacy_policy');
});
Route::get('/Terms_and_Conditions', function () {
    return view('terms_and_conditions');
});
Route::get('/Shipping_and_Delivery', function () {
    return view('shipping_and_delivery');
});
Route::get('/Cancellation_and_Refund', function () {
    return view('cancellation_and_refund');
});