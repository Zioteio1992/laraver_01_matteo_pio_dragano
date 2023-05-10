<?php

use Illuminate\Support\Facades\Route;

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
// QUESTO è IL FILE NELLA QUALE GESTIAMO LE ROTTE!


//1 Rotta HOMEPAGE
Route::get('/', function () {
    return view('home');
});

//creo una nuova rotta BLOG
Route::get('/blog',function(){
    return view("blog");
});

//creo una lista che mostri i prodotti. 
Route::get('/products',function(){
$products=[
    [ 'type'=>'MAGLIETTA', 'color'=>'rossa'],
    ['type'=>'PANTALONE', 'color'=>'blu'],
    ['type'=>'GONNA', 'color'=>'rosa']
    ];

    return view('products', ['products'=>$products]);

});