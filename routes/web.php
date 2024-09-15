<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function (){
    $order = [
       "product" => "Sipariş 1",
    ];
    event(new \App\Events\OrderCreated(json_encode($order)));
    return "sipariş oluşturuldu";
});



