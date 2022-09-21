<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/test',function(){
//     // return 'Test';
//     $product = Product::create([
//         'name'=> 'Test2',
//         'price'=>200,
//     ]);

//     return $product;
// });

// Route::get('/product',function(){
//     return Product::all();
// });
// Route::get('/product/{id}', function($id){
//     return Product::findOrfail($id);
// });
// Route::post('/product',function (Request $request){
//     $input = $request->all();
//     $product = Product::created($input);

//     return $product;
// });

// Route::put('product/{id}/update',function(Request $request,$id){

//     $input = $request->all();
//     $product = Product::find($id);
//     $product->update($input);

//     return $product;

// });


// Route::delete('product/{id}/delete',function(){

// });


Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'create']);
Route::put('/products/{id}/update', [ProductController::class, 'update']);
Route::delete('/products/{id}/delete', [ProductController::class, 'delete']);
Route::get('/products/user/{id}', [ProductController::class, 'productUser']);


