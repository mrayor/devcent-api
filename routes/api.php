<?php

use Illuminate\Http\Request;

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
//Courses
Route::get('/courses', 'CoursesController@index');
Route::get('/courses/{id}', 'CoursesController@course');
Route::get('/courses/{id}/outline', 'CoursesController@outline');
//Applicants
Route::get('/applicants', 'ApplicantsController@index');

// Route::get('/outline', 'CoursesController@outline');


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
