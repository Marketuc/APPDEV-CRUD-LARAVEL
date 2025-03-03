<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role = null)
    {
        // Allow unauthenticated users to access login and register pages
        if (!Auth::check()) {
            return $next($request); // Let Laravel handle authentication
        }

        $user = Auth::user();

        // Debugging: Log user role
        \Log::info('User Role:', ['role' => $user->role]);

        // If a role is required, check if the user matches
        if ($role && $user->role !== $role) {
            abort(403, "Unauthorized - Your role is '{$user->role}', but '{$role}' is required.");
        }

        return $next($request);
    }
}
