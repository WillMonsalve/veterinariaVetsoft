<?php

use GuzzleHttp\Middleware;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\CitaController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AgendaController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\DetalleController;
use App\Http\Controllers\Admin\MascotaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HistoriaController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\horario_agendaController;
use App\Http\Controllers\Admin\PermissionController;

Route::get('', [HomeController::class, 'index'])->Middleware('can:admin.home')->name('admin.home');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('tags', TagController::class)->names('admin.tags');
Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');
Route::resource('permissions', PermissionController::class)->names('admin.permissions');

Route::resource('servicios', ServicioController::class)->except('show')->names('admin.servicios');
Route::resource('citas', CitaController::class)->names('admin.citas');
Route::resource('agendas', AgendaController::class)->names('admin.agendas');
Route::resource('horario_agenda', horario_agendaController::class)->names('admin.horario_agenda');
Route::resource('clientes', ClienteController::class)->names('admin.clientes');
Route::resource('detalles', DetalleController::class)->names('admin.detalles');
Route::resource('historias', HistoriaController::class)->names('admin.historias');
Route::resource('mascotas', MascotaController::class)->names('admin.mascotas');
Route::resource('ayudas', AyudaController::class)->names('admin.ayudas');

