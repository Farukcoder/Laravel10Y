<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodonewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view('/test_f','test');

// Route::get('/test/{id}', function (string $id) {

//     if ($id) {
//         return "<h1> Post ID: " . $id . " </h1>";
//     } else {
//         return "<h1>Not found !!</h1><h2>No comment</h2>";
//     }
// })->whereIn('id', ['faruk', 'talha', 'nasir']);

Route::get('/test/{id}/comment/{comment_id}', function (string $id, $comment_id) {

    if ($id) {
        return "<h1> Post ID: " . $id . " </h1> <h2>". $comment_id ."</h2>";
    } else {
        return "<h1>Not found !!</h1><h2>No comment</h2>";
    }
})->where('id','[a-zA-Z]+')->whereNumber('comment_id');

Route::get('/user', function () {
    return view('test')->withUser('faruk')->withCity('dhaka');
});



Route::controller(PageController::class)->group(function(){
    Route::get('/show_user', 'showUser')->name('user');

    Route::get('/show_blog', 'showBlog')->name('blog');
});

Route::get('/invoke_test', TestController::class);

Route::resource('todonew', TodonewController::class);

Route::get('/clients',[ClientController::class, 'showClients']);

Route::get('/client/view/{id}',[ClientController::class, 'showClient'])->name('view.client');

Route::get('/client',[ClientController::class, 'client'])->name('add.client');

Route::post('/add_client_save',[ClientController::class, 'addClient'])->name('client.save');

Route::get('/edit/{id}',[ClientController::class, 'editClient'])->name('edit.client');

Route::put('/update/{id}',[ClientController::class, 'updateClient'])->name('update.client');

Route::get('/delete/{id}',[ClientController::class, 'deleteClient'])->name('client.delete');

Route::get('/show_all_client', [ClientController::class, 'showAllClients']);

Route::get('/show_union', [ClientController::class, 'clientUnion']);

Route::get('/when', [ClientController::class, 'whenData']);

Route::get('/chank', [ClientController::class, 'chankData']);

Route::get('/raw_data', [ClientController::class, 'rawData']);

//with route name
//Route::resource('employees', EmployeeController::class)->only([
//    'create','index','store',
//]);

//without all route name
//Route::resource('employees', EmployeeController::class)->except([
//    'create','index','store',
//]);


Route::resource('employees', EmployeeController::class)->names([
    'create' => 'employees.build',
    'index' => 'employees.index'
]);

Route::get('/products', function () {
   return \App\Models\Product::all();
});

Route::resource('brands', BrandController::class);
Route::resource('dealers', DealerController::class);
