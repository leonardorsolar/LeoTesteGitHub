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

/*
Route::get('/product', function () {
    return 'leonardo';
});
*/ 

Route::get('/listarprodutos', 'ProductController@index'); 
Route::get('/listarprodutos/{product}', 'ProductController@show'); 

 /*
Route::get('/alo/{name}', function ($name) {
    return "alo mundo " . $name;
});

Route::get('/all_users1', function () {
    return DB::select('SELECT * FROM users WHERE 1=1');
    });

    //Note que a variável $users foi compartilhada a partir da rota na view, isso graças ao segundo
    //parâmetro do método view(), ele informa o nome da variável e o valor que ela deverá ter
Route::get('/listar', function () {
     $users = DB::select('SELECT * FROM users WHERE 1=1');
    return view ('users.aprendendo_rotas', ['usuarios'=>$users]);
});

Route::get('/list', function () {
    $users = DB::select('SELECT * FROM users WHERE 1=1');
    return view ('users.aprendendo_rotas', ['usuarios'=>$users]);
});
*/

// Route::get('/all_users', ['uses'=>'UsersController@allUsers']);
//Route::get('/all_users', 'UsersController@allUsers'); 
    
