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
    Route::post("/chats/{chat}/updateRole", [\App\Http\Controllers\Chat\ChatController::class, 'updateRole'])->name("chat.updateRole");
    Route::post('/folder', [\App\Http\Controllers\Folder\FolderController::class, 'store'])->name('folder.store');
    Route::get("/messages/get/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'Reshow'])->name('messages.get');
    Route::get("/messages-cost/get/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'ShowCost'])->name('messages-cost.get');
    Route::get("/chat/role/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'ShowRole'])->name('role.get');
    Route::get("/settings/langChange", [\App\Http\Controllers\Settings\SettingsController::class, "changeLanguage"])->name("changeLanguage");
    Route::get("/settings/themeChange", [\App\Http\Controllers\Settings\SettingsController::class, "changeTheme"])->name("changeTheme");
    Route::post("/settings/store", [\App\Http\Controllers\Settings\SettingsController::class, "store"])->name("settingsSave");

    Route::get("/prompts", [\App\Http\Controllers\Prompt\PromptController::class, 'index'])->name('prompts.index');
    Route::get("/prompts/{PromptFolder}", [\App\Http\Controllers\Prompt\PromptController::class, 'show'])->name('prompts.show');
    Route::get("/prompts/{PromptFolder}/main", [\App\Http\Controllers\Prompt\PromptController::class, 'showMain'])->name('prompts.getMain');
    Route::post("/prompts", [\App\Http\Controllers\Prompt\PromptController::class, 'store'])->name('prompts.store');
    Route::post("/prompts_folder", [\App\Http\Controllers\Prompt\PromptController::class, 'storeFolder'])->name('prompts_folder.store');
    Route::delete("/prompts_folder/{prompt_folders}", [\App\Http\Controllers\Prompt\PromptController::class, 'destroyFolder'])->name('prompts_folder.destroy');

    Route::get("/role", [\App\Http\Controllers\Role\RoleController::class, 'index'])->name('role.index');
});
Route::post('/sendMessage', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'send__message'])->name('sendMessage');
Route::get('/event-stream/{chat}', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'event__stream']);

require __DIR__.'/auth.php';
