<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Folder;
use App\Models\Message;
use App\Models\UserModelSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = UserModelSettings::where("user_id", Auth::id());
        $chats = Chat::whereNull('folder_id')->where('user_id', Auth::id())->get();
        $folders = Folder::with('children')->get();
        return view('Chats.index', compact('chats', 'folders', 'settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $chat = Chat::create([
            'user_id' => Auth::id()
        ]);

        return redirect()->route('chats.show', $chat->id);
    }

    public function storeInFolder(Request $request)
    {
        Chat::create([
            'user_id' => Auth::id(),
            'folder_id' => $request->folder_id
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        $chats = Chat::whereNull('folder_id')->where('user_id', Auth::id())->get();
        $folders = Folder::with('children')->get();
        $messages = Message::where('chat_id', $chat->id)->orderByDesc("id")->take(8)->get()->sortBy("id");;
        return view('Chats.show', compact('chat', 'chats', 'messages', 'folders'));
    }

    public function ShowCost(Chat $chat)
    {
        return view('components.tokens_in_chat', compact('chat'));
    }

    public function ShowRole(Chat $chat)
    {
        $show = true;
        return view('components.role', compact('chat', 'show'));
    }

    public function Reshow(Chat $chat)
    {
        $messages = Message::where('chat_id', $chat->id)->orderByDesc("id")->take(8)->get()->sortBy("id");
        return view('components.message', compact('messages'));
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

    public function updateRole(Request $request, Chat $chat)
    {
        $chat->update([
            "role" => $request->role
        ]);

        return redirect()->route('chats.show', $chat->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chat $chat)
    {
        $chat->delete();

        return redirect()->route('chats.index');
    }
}
