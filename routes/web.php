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

// LP獲得用
Route::get('job', function () {
    return view('fb.check'); //確認用LP
    // return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得LP - ワクワク(fam)
    
    // return view('fb.noMatch'); //獲得LP(1)
});

// LP確認用
Route::get('cccheck', function () {
    return redirect('https://fam-ad.com/ad/p/r?_site=64801&_article=16355'); //獲得LP - ワクワク(fam)
    // return view('fb.noMatch'); //獲得LP(1)
});