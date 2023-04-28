<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Http\Requests\Chat\StoreInFolderRequest;
use App\Http\Requests\Chat\StoreRequest;
use App\Http\Requests\Chat\UpdateRequest;
use App\Http\Requests\Chat\UpdateRoleRequest;
use App\Models\Chat;
use App\Models\Folder;
use App\Models\Message;
use App\Models\PromptFolder;
use App\Models\UserModelSettings;
use Barryvdh\Debugbar\Facades\Debugbar;
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
        Auth::user()->tokens = 5000;
        Auth::user()->save();
        if ($chat = Chat::where('user_id', Auth::id())->first()) return redirect()->route('chats.show', $chat->id);
        $chat = Chat::create([
            'user_id' => Auth::id()
        ]);

        return redirect()->route('chats.show', $chat->id);
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
            'user_id' => Auth::id(),
            'role' => env('default_role')
        ]);

        return redirect()->route('chats.show', $chat->id);
    }

    public function storeInFolder(StoreInFolderRequest $request)
    {
        $data = $request->validated();
        Chat::create([
            'user_id' => Auth::id(),
            'folder_id' => $data['folder_id']
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chat $chat)
    {
        $chats = Chat::whereNull('folder_id')->where('user_id', Auth::id())->get()->sortBy("id");
        $folders = Folder::with('children')->get();
        $messages = Message::where('chat_id', $chat->id)->orderByDesc("id")->get()->sortBy("id");
        $prompts_category = PromptFolder::where('is_main', 1)->orWhere('user_id', Auth::id())->get();
        return view('Chats.show', compact('chat', 'chats', 'messages', 'folders', 'prompts_category'));
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
        $messages = Message::where('chat_id', $chat->id)->orderByDesc("id")->get()->sortBy("id");
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
    public function update(UpdateRequest $request, Chat $chat)
    {
        $data = $request->validated();
        $chat->update([
            "title" => "{$data['title']}"
        ]);
        Debugbar::log($chat);

        return redirect()->route('chats.show', $chat->id);
    }

    public function updateRole(UpdateRoleRequest $request, Chat $chat)
    {
        $data = $request->validated();
        $chat->update([
            "role" => "{$data['role']}"
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
