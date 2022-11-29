<?php

namespace App\Http\Middleware;

use App\Models\Team;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleEditor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   
        dd($request->user()->isEditor(Auth::user()));
        if (!$request->user()->isEditor($request->user()))
            return redirect('/')->withErrors( 
                ['msg' => 'No autenticado o sin permisos de edición.']);
        return $next($request);
    }
}
