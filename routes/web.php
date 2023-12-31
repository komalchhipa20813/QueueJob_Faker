<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendmailController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('email-test', function(){
  
    $details['email'] = 'komalkhalasi.13@gmail.com';
  
    dispatch(new App\Jobs\SendEmailJob($details));
  
    dd('Done');
});

Route::get('/send-mail',[SendmailController::class, 'sendMail']);
