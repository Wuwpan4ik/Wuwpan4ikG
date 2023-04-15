<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function() {
    Route::get('/', [\App\Http\Controllers\Chat\ChatController::class, 'index']);
    Route::resource('chats', \App\Http\Controllers\Chat\ChatController::class);
    Route::post('/chats.folder_store', [\App\Http\Controllers\Chat\ChatController::class, 'storeInFolder'])->name('chats.folder_store');
    Route::post('/folder', [\App\Http\Controllers\Folder\FolderController::class, 'store'])->name('folder.store');
    Route::get("/messages.get/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'Reshow'])->name('messages.get');
});
Route::post('/sendMessage', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'send__message'])->name('sendMessage');
Route::get('/event-stream', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'event__stream']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
