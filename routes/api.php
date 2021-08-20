<?php



use App\Http\Controllers\InternlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/create',[InternlistController::class, 'index']);
Route::get('create',[InternlistController::class, 'index']);


Route::get('/internlists', [InternlistController::class,'index']);
Route::delete('/internlists/{internlists}',[InternlistController::class, 'destroy']);


Route::resource('internlists', InternlistController::class);
