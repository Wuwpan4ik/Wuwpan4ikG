<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateAvatarRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Kaoken\LinkifyIt\Re;

class UserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function setPartner(StoreRequest $request)
    {
        $data = $request->validated();
        session()->put('partner_id', $data['partner_id']);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->except('_token', '_method');
        $user->update($data);
    }

    public function updateAvatar(UpdateAvatarRequest $request, User $user)
    {
        $data = $request->except('_token', '_method');

        if ($user->avatar && !$user->have_default_avatar()) {
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
