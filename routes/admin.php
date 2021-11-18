<?php

use App\Http\Controllers\Back\UsuarioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin'
],
    function(){
        /* RUTAS ESCRITORIO */
        Route::get('', [HomeController::class, 'index'])->name('escritorio');
        /* RUTAS USUARIO */
        Route::get('usuarios', [UsuarioController::class, 'index'])->name('usuarios');
        Route::get('usuario/crear', [UsuarioController::class, 'create'])->name('usuario.crear');
        Route::get('usuario/{id}/editar', [UsuarioController::class, 'edit'])->name('usuario.editar');
        Route::post('usuario', [UsuarioController::class, 'store'])->name('usuario.guardar');
        Route::put('usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.actualizar');
        Route::delete('usuario/{id}/eliminar', [UsuarioController::class, 'destroy'])->name('usuario.eliminar');
    }

);