<?php

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

Route::get('/displaythesum', 'MyfirstController@index');

Route:: get ('/addition', function(){
    	$num1 =5;
    	$num2 =8;
    	$result =$num1 + $num2;
    	return " The quotient of ".$num1." and ".$num2." is ".$result;
    }); 

Route:: get ('/subtraction', function(){
    	$num1 =10;
    	$num2 =1;
    	$result =$num1 - $num2;
    	return " The difference of ".$num1." and ".$num2." is ".$result;
    }); 