<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Passenger;

class PassengerCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*$user = Passenger::all()->count();
        
        if ($request->input('token') !== 'my-secret-token') {
            return redirect('userhome');
        }*/

        return $next($request);
    }
}
