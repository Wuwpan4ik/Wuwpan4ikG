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


Route::middleware(['auth', 'code'])->group(function() {
    Route::get('/', [\App\Http\Controllers\Chat\ChatController::class, 'index'])->name('main');
    Route::post("/promocode", [\App\Http\Controllers\Promocode\PromocodeController::class, 'use'])->name('promocode.use');
    Route::patch('/user/{user}', [\App\Http\Controllers\User\UserController::class, 'update'])->name('user.update');
    Route::patch('/user_avatar/{user}', [\App\Http\Controllers\User\UserController::class, 'updateAvatar'])->name('user.avatar');

    Route::post('/chats_create/folder_store', [\App\Http\Controllers\Chat\ChatController::class, 'storeInFolder'])->name('chats.folder_store');
    Route::resource('chats', \App\Http\Controllers\Chat\ChatController::class);
    Route::middleware('check_user_chat')->group(function() {
        Route::get('chats/{chat:uuid}', [\App\Http\Controllers\Chat\ChatController::class, 'show'])->name('chats.show');
        Route::patch('chats/{chat}', [\App\Http\Controllers\Chat\ChatController::class, 'update'])->name('chats.update');
        Route::delete('chats/{chat}', [\App\Http\Controllers\Chat\ChatController::class, 'destroy'])->name('chats.destroy');
    });
    Route::patch('chats-settings/{chat}', [\App\Http\Controllers\Chat\ChatController::class, 'updateSettings'])->name('chats_settings.update');
    Route::get('/message/getCostMessage/{chat}', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'stopEventListener']);

    Route::post("/chats/{chat}/updateRole", [\App\Http\Controllers\Chat\ChatController::class, 'updateRole'])->middleware('check_user_chat')->name("chat.updateRole");
    Route::patch('/folder/{folder}', [\App\Http\Controllers\Folder\FolderController::class, 'update'])->name('folder.update');
    Route::post('/folder', [\App\Http\Controllers\Folder\FolderController::class, 'store'])->name('folder.store');
    Route::delete('/folder/{folder}', [\App\Http\Controllers\Folder\FolderController::class, 'delete'])->name('folder.delete');
    Route::get('/chat_sidebar/{chat}', [\App\Http\Controllers\MainController::class, 'showSidebar'])->middleware('check_user_chat');

    Route::resource('messages', \App\Http\Controllers\Message\MessageController::class);
    Route::get("/messages/get/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'Reshow'])->middleware('check_user_chat')->name('messages.get');
    Route::get("/messages-cost/get/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'ShowCost'])->middleware('check_user_chat')->name('messages-cost.get');
    Route::get("/chat/role/{chat}", [\App\Http\Controllers\Chat\ChatController::class, 'ShowRole'])->middleware('check_user_chat')->name('role.get');
    Route::post("/settings/store", [\App\Http\Controllers\Settings\SettingsController::class, "store"])->name("settingsSave");

    Route::delete("/prompts_folder/{prompt_folder}", [\App\Http\Controllers\Prompt\PromptController::class, 'destroyFolder'])->name('prompts_folder.destroy');

    Route::get("/prompts", [\App\Http\Controllers\Prompt\PromptController::class, 'index'])->name('prompts.index');
    Route::get("/prompts/{PromptFolder}", [\App\Http\Controllers\Prompt\PromptController::class, 'show'])->name('prompts.show');
    Route::get("/prompts/{PromptFolder}/main/{library}", [\App\Http\Controllers\Prompt\PromptController::class, 'showMain'])->name('prompts.getMain');
    Route::get("/prompts_folder/sidebar_content", [\App\Http\Controllers\Prompt\PromptController::class, 'showSideBar']);
    Route::post("/prompts", [\App\Http\Controllers\Prompt\PromptController::class, 'store'])->name('prompts.store');
    Route::post("/prompts_folder", [\App\Http\Controllers\Prompt\PromptController::class, 'storeFolder'])->name('prompts_folder.store');
    Route::patch("/prompts_folder/{prompt_folder}", [\App\Http\Controllers\Prompt\PromptController::class, 'update'])->name('prompts_folder.update');

    Route::get("/role", [\App\Http\Controllers\Role\RoleController::class, 'index'])->name('role.index');
    Route::post("/payer", [\App\Http\Controllers\Payer\PayerController::class, 'Buy'])->name('payer.buy');

    Route::get("/get_tokens", function () { return view('components.count_tokens'); });
    Route::get("/add_formPrompt/{prompts_id}", [\App\Http\Controllers\Prompt\PromptController::class, 'showAddForm']);

    Route::post('/sendMessage', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'send__message'])->name('sendMessage')->middleware('user_tokens');
    Route::get('/event-stream/{chat}', [\App\Http\Controllers\OpenAi\OpenAiController::class, 'event__stream'])->middleware('check_user_chat');

    Route::get("/settings/langChange", [\App\Http\Controllers\Settings\SettingsController::class, "changeLanguage"])->name("changeLanguage");
    Route::get("/settings/themeChange", [\App\Http\Controllers\Settings\SettingsController::class, "changeTheme"])->name("changeTheme");
    Route::get("/settings/sidebarChange", [\App\Http\Controllers\Settings\SettingsController::class, "changeSidebar"])->name("changeSidebar");
    Route::get("/settings/changeEconom", [\App\Http\Controllers\Settings\SettingsController::class, "changeEconom"])->name("changeEconom");
    Route::get("/theme/get", function() { return view("components.get_theme"); });

    Route::post("/store_test", [\App\Http\Controllers\Payer\PayerController::class, 'store_test'])->name('store_test');

});

require __DIR__.'/auth.php';
