<?php

use App\Http\Controllers\NewsletterApiController;

Route::get('/newsletters', [NewsletterApiController::class, 'getNewsletters']);
Route::get('/newsletters/{id}', [NewsletterApiController::class, 'getNewsletter']);
Route::post('/newsletters', [NewsletterApiController::class, 'createNewsletter']);
Route::put('/newsletters/{id}', [NewsletterApiController::class, 'updateNewsletter']);
Route::delete('/newsletters/{id}', [NewsletterApiController::class, 'deleteNewsletter']);
