<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
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



// Route::get('/hello', function () {
//     return response('<h1>Hello world</h1>')
//         ->header('Content-Type', 'text/plain')
//         ->header('donsolo', 'khalifa');
// });

// Route::get('/posts/{id}', function ($id) {
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//     return ($request->Name . ' ' . $request->Type);
// });


//all jobs
Route::get('/', [JobController::class,'index'] );

//show create form
Route::get('/jobs/create',[JobController::class, 'create']);


//store jobs
Route::post('/jobs',[JobController::class, 'store']);

//show edit
Route::get('/jobs/{job}/edit',[JobController::class, 'edit']);

//update job
Route::put('jobs/{job}',[JobController::class,'update']);

//delete job
Route::delete('jobs/{job}',[JobController::class,'destroy']);


//single jobs
Route::get('/jobs/{job}',[JobController::class, 'show']);