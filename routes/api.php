<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/request', function(Request $request) {
    Mail::send(new OrderShipped($request->all()));
});
