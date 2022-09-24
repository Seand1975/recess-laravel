<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if(\Auth::check()){
    if(\Auth:: user()->user_role=='1'){
        return$next($request);
    }
    else{
        return redirect('/')->with ('status','Access denied! as you are not an Admin');
    }
    }
    else{
        return redirect('/')->with('status','Please Login first'); 
    }
}
}
