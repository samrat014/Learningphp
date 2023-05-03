<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class eighteenplus
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
        // return $next($request);
        
        return response()->view('askAge');
        // return view('askAge');
        
        dd('hey');
        
        
        // $age = $request->input('age');
        // if ($age >= 18) {
        //     return $next($request);
        // } else {
        //     return redirect()->route('askAge');
        // }
        
    }
}
