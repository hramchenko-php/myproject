<?php

use Illuminate\Support\Facades\Route;
// Обработка несуществующих маршрутов
Route::fallback(function () {
    abort('404', 'Страница не найдена! Ошибка 404.');
});

//TODO Обработка ресурсов связанных с приложением
Route::resource('todo', 'TodoController');
Route::get('test','TestController@index');
