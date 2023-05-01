<?php

namespace App\Http\Middleware;

use App\Models\Chat;
use Barryvdh\Debugbar\Facades\Debugbar;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class check_user_chat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $chat = $request->route()->parameter('chat');
        if ($chat->user_id === Auth::id()) return $next($request);
        return redirect()->route('main');
    }
}
