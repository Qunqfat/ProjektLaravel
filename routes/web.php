<?php

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

Route::get('/hello/{name}', 'HelloController@hello');

Route::get('/goodbye/{name}', function (string $name) {
    return 'Goodbye: ' . $name;
});

// Route::get('/example', function () {
//     return "jestem GET";
// });

$uri = '/example';
Route::get($uri, fn () => 'jestem arrow GET');
Route::post($uri, fn () => 'jestem post');
Route::put($uri, fn () => 'jestem PUT');
Route::delete($uri, fn () => 'jestem DELETE');
Route::patch($uri, fn () => 'jestem PATH');
Route::options($uri, fn () => 'jestem OPTIONS');

Route::match(['get', 'post'], '/match', function () {
    return 'jestem getem i postem jednoczesnie';
});

Route::any('/all', fn () => 'wszystkie metody');

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
