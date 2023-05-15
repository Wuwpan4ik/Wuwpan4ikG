<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateAvatarRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
        //
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
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->except('_token', '_method');
        Debugbar::log($data);
        $user->update($data);
        Debugbar::log($user);
    }

    public function updateAvatar(UpdateAvatarRequest $request, User $user)
    {
        $data = $request->except('_token', '_method');

        if ($user->avatar) {
            Storage::delete('/public/' . $user->avatar);
        }

        $path = $request->file('avatar')->store('/public/avatars');
        $fileName = basename($path);

        $user->avatar = 'avatars/' . $fileName;
        $user->save();

        return redirect()->route('chats.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}