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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// student
Route::get('student', 'StudentController@index')->name('student');
Route::get('student/create', 'StudentController@create')->name('student/create');
// teacher
Route::get('teacher', 'TeacherController@index')->name('teacher');
Route::get('teacher/create', 'TeacherController@create')->name('teacher/create');

// parents
Route::get('parent', 'ParentsController@index')->name('parent');
Route::get('parent/create', 'ParentsController@create')->name('parent/create');

// staff
Route::get('staff', 'StaffController@index')->name('staff');
Route::get('staff/create', 'StaffController@create')->name('staff/create');

//  acadamic class
Route::get('acadamic/class', 'PClassController@index')->name('acadamic/class');
Route::get('acadamic/class/create', 'PClassController@create')->name('acadamic/class/create');

// acadamic section
Route::get('section', 'SectionController@index')->name('section');
Route::get('section/create', 'SectionController@create')->name('section/create');





