<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterViewController;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/newsletters', [NewsletterViewController::class, 'index'])->name('newsletters.index');
Route::get('/newsletters/create', [NewsletterViewController::class, 'create'])->name('newsletters.create');
Route::post('/newsletters', [NewsletterViewController::class, 'store'])->name('newsletters.store');
Route::get('/newsletters/{id}/edit', [NewsletterViewController::class, 'edit'])->name('newsletters.edit');
Route::put('/newsletters/{id}', [NewsletterViewController::class, 'update'])->name('newsletters.update');
Route::delete('/newsletters/{id}', [NewsletterViewController::class, 'delete'])->name('newsletters.delete');
