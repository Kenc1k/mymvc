<?php

error_reporting(E_ALL); // Report all errors
ini_set('display_errors', 1);
USE App\Controllers\Controller;
USE App\Controllers\AuthController;

USE App\Controllers\AuthorController;
USE App\Controllers\GenreController;
USE App\Controllers\BookController;
USE App\Routes\Route;

// Main
Route::get('/',[Controller::class,'index']);
Route::get('/index',[Controller::class,'index']);

Route::post('/register' , [Controller::class, 'register']);

?>