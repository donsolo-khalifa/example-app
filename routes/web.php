<?php

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



Route::get('/', function () {
    return view('jobs',[
        'jobs'=>Job::all()]);
});

Route::get('/jobs/{job}',function(Job $job){
    return view('job',[
        'job'=>$job
    ]);
});