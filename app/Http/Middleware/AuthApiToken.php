<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class AuthApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $header = $request->header('Authorization');
        if (!$header) return response()->json(['message'=>'Unauthorized'],401);

        $token = str_replace('Bearer ', '', $header);
        $hashed = hash('sha256', $token);
        $user = User::where('api_token', $hashed)->first();
        if (!$user) return response()->json(['message'=>'Unauthorized'],401);

        $request->merge(['api_user' => $user]);
        return $next($request);
    }
}
