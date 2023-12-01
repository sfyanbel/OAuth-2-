<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;

class ViewPostRole
{

    use HasRoles;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $roles=auth('api')->user()->hasRole('postViewUser');
        if ($roles){
            return $next($request);
        }
        else {
            return response()->json(['error' => 'user not have this Roles'], 401);
        }
    
    }
}
