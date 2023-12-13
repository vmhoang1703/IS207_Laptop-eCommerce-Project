<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Check if the user has any of the specified roles
        if (!$request->user() || !$request->user()->hasAnyRole(...$roles)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
