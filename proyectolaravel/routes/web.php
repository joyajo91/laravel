<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

Route::get('/', function () {
    return "view('welcome')";
});

/*Route::get('/registro', function () {
    return "view('index.registros')";
});

Route::get('/registro/create',[RegistroController::class,'create']);
*/
//se aoptimia las rutas//

Route::resource('registro',RegistroController::class);
