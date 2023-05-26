<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class TelegramBot extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Debugbar::log($request);
        $email = $request->email;
        $telegram = $request->telegram;
        $category = $request->zayavka;
        if($category == 'Заявка на Midjourney'){
            $text = "Пользователь оставил заявку на тестирование Midjourney\n\nПользователь: $telegram \n\nПочта: $email";
        }
        if($category == "Заявка на умного бота" or $category == "Заявка на внедрение умного бота"){
            $prof = $request->prof;
            $question = $request->question;
        }
        if($category == "Заявка на умного бота"){
            $text = "Пользователь оставил заявку на тестирование умного бота\n\nПользователь: $telegram \n\nПочта: $email\n\nПрофессия: $prof\n\nВопрос: $question";
        }
        if($category == "Заявка на внедрение умного бота"){
            $text = "Пользователь оставил заявку на внедрение умного бота\n\nПользователь: $telegram \n\nПочта: $email\n\nПрофессия: $prof\n\nВопрос: $question";
        }
        $response = [
            'chat_id' => '-836677384',
            'text' => $text
        ];

        $ch = curl_init('https://api.telegram.org/bot' . "6124237548:AAFikEaXlmDzPgZEWAEWMtMdsBazlEAyxgs" . '/sendMessage');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_exec($ch);
        curl_close($ch);
        
        header('Location: /');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
