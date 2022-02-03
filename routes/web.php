<?php

use App\Http\Controllers\GameController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout/login');
});

Route::get('mainPage', 'GameController@show')
    ->name('get.mainPage');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');





Route::get('stats', 'GameController@stats')
    ->name('get.stats');

Route::get('rest', 'GameController@rest')
    ->name('get.rest');

Route::get('master', 'GameController@master')
    ->name('get.master');









Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');

Route::get('equipment', 'GameController@equipment')
    ->name('get.equipment');














Route::get('users', 'UserController@list')
    ->name('get.users');

Route::get('users/{userId}', 'UserController@show')
    ->name('get.user.show');

// Route::get('users/{id}/profile', 'User\ProfilController@show')
//     ->name('get.user.profile');

Route::get('users/{id}/address', 'User\ShowAddress')
    ->where(['id' => '[0-9]+'])
    ->name('get.users.address');

Route::resource('games', 'GameController')
    ->only([
        'index', 'show'
    ]);

Route::resource('admin/games', 'GameController')
    ->only([
        'store', 'create', 'destroy'
    ]);





























    // Route::resource('games', 'GameController');
// Route::post('/games/test', 'GameController@create');

//metody HTTP
// get - pobiera dane z serwera i zwrócenie użytkownikowi, po stronie aplikacji nie powinno się nic zmieniać
// post - po stronie serwisu tworzy się obiekt np dodanie nowej notatki przez użytkownika
// patch - zaktualizowanie danego pola /pól obiektu np aktualizowanie pole "tekst" w nowej notatce
// put - aktualizowanie całego obiektu wcześniej utworzonego
//delete - usuwanie np notatka użytkownika
// options - zwraca opcje powiązane z danych URL/zasobem
//match - definiuje kod który ma się wykonać zarówno dla metod get i post przy podanym URL
//any - dopuszczamy wykonanie wszystkich metod HTTP
// TODO: poczytać o REST API

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
