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

Route::get('/', function () {
    return view('welcome');
});


//Admin Controller


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category','CategoryController@index');
Route::get('category/items','CategoryController@items');
Route::post('category/save','CategoryController@save');
Route::get('category/items','CategoryController@display');
Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update','CategoryController@update');
Route::get('category/delete/{id}','CategoryController@delete');


//CourseController
Route::get('category/courses','CourseController@add');
Route::post('category/courses/save','CourseController@SAVE');
Route::get('category/courses','CourseController@Display');
Route::get('category/eddit/{id}','CourseController@eddit');
Route::post('category/Updatee','CourseController@Updatee');
Route::get('category/courses/delete/{id}','CourseController@Delete');


// FrontenedController
Route::get('/','FrontendController@create');
Route::get('front/signup','FrontendController@signup');
Route::post('front/signup_save','FrontendController@signup_save');









//Banner Controller

Route::get('category/banner','BannerController@create');
Route::post('category/banner/save','BannerController@save');
Route::get('category/banner','BannerController@display');

Route::get('category/banner/editt/{id}','BannerController@edit');
Route::post('category/banner/update','BannerController@update');
Route::get('category/banner/delete/{id}','BannerController@delete');
 


//OnlineCourse Controller
Route::get('category/onlinecourse','OnlineCourseController@create');
Route::post('category/onlinecourse/save','OnlineCourseController@save');
Route::get('category/onlinecourse','OnlineCourseController@display');

Route::get('category/onlinecourse/editt/{id}','OnlineCourseController@edit');
Route::post('category/onlinecourse/update','OnlineCourseController@update');
Route::get('category/onlinecourse/delete/{id}','OnlineCourseController@delete');
 


//Navbar OR Footer Controller

Route::get('front/navbarfooter','NavbarController@create');
Route::post('front/navbarfooter/save','NavbarController@save');
Route::get('front/navbarfooter','NavbarController@display');

Route::get('front/navbarfooter/editt/{id}','NavbarController@edit');
Route::post('front/navbarfooter/update','NavbarController@update');
Route::get('front/navbarfooter/delete/{id}','NavbarController@delete');
 
//CourseDetail 
Route::get('course_detail/{id}','CourseController@course_detail');
 
//Courses
Route::get('front/courses','CourseController@courses');


//Category_Course
Route::get('category_course/{id}','CourseController@category_course');