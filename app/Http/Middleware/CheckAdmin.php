<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Auth;
class CheckAdmin
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
         $user = User::all()->count();
       /* if (!($user == 1)) {
            if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user does //not have this permission
            {
                abort('401');
            }
        }*/
        return $next($request);
    }

}
