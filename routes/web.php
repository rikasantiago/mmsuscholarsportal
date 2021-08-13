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

/*STUDENT ROUTE*/

Route::get('/', function () {
    return view('loginstudent');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/proof', function () {
    return view('proof');
});

Route::get('/scholarshipdetails', function () {
    return view('scholarshipdetails');
});

Route::get('/apply', function () {
    return view('apply');
});

Route::get('/termination', function () {
    return view('termination');
});

Route::get('/scholarshipprograms', function () {
    return view('scholarshipprograms');
});

Route::get('/loginstudent', function () {
    return view('loginstudent');
});

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/profilestudent', function () {
    return view('profilestudent');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/upload', function () {
    return view('upload');
});

/*ADMIN ROUTE*/

Route::get('/loginadmin', function () {
    return view('loginadmin');
});

Route::get('homeadmin', function () {
    return view('homeadmin');
});

Route::get('listadmin', function () {
    return view('listadmin');
});

Route::get('testscholarship', function () {
    return view('testscholarship');
});



Route::get('analytics', function () {
    return view('analytics');
});

Route::get('calendaradmin', function () {
    return view('calendaradmin');
});

Route::get('cas', function () {
    return view('cas');
});

Route::get('homeadmin', function () {
    return view('homeadmin');
});

Route::get('listadmin', function () {
    return view('listadmin');
});

Route::get('proofadmin', function () {
    return view('proofadmin');
});

Route::get('scholarshipdetailsadmin', function () {
    return view('scholarshipdetailsadmin');
});

Route::get('scholarshipprogramadmin', function () {
    return view('scholarshipprogramadmin');
});

Route::get('schoalrsprofileadmin', function () {
    return view('scholarsprofileadmin');
});

/*COORDINATOR ROUTE*/

