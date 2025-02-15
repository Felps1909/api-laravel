<?php

use Illuminate\Support\Facades\Route;

use App\Controllers\JobsController;

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

Route::group(array('prefix' => 'api'), function(){
    
    Route::get('/', function()
    {
        return response()->json(['message' => 'Jobs API', 'status' => 'Conected']);
    });
    
    Route::get('/jobs', [JobsController::class, 'index']);
    Route::resource('companies', 'CompaniesController');
});
    
Route::get('/',function()
{
    return redirect('api');
});
