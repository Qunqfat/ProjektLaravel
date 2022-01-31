<?php

use App\Http\Controllers\GameController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('users', 'UserController@list')
    ->name('get.users');

Route::get('users/{id}', 'User\ProfilController@show')
    ->name('get.user.profile');

Route::get('users/{id}/address', 'User\ShowAddress')
    ->where(['id' => '[0-9]+'])
    ->name('get.users.address');

// Route::resource('games', 'GameController');
Route::resource('games', 'GameController');

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
