<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/contact/{id}/show', [ContactsController::class, 'show'])->name('contact.show');
Route::get('/contact/search', [ContactsController::class, 'search'])->name('contact.search');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::post('/contact/create', [ContactsController::class, 'create'])->name('contact.create');
Route::get('/contact/create', [ContactsController::class, 'createPage'])->name('contact.create.page');
Route::get('/contact/{id}/update', [ContactsController::class, 'updatePage'])->name('contact.update.page');
Route::put('/contact/{id}/update', [ContactsController::class, 'update'])->name('contact.update');
Route::delete('/contact/{id}/delete', [ContactsController::class, 'delete'])->name('contact.delete');
