<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Frontend\SellerDashboardController;
use App\Models\Dashboard;
use App\Models\Frontend\Seller;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;
        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         // return redirect(RouteServiceProvider::HOME);
        //         return redirect()->route('admin.includes.dashboard');
        //     }
        // }

        // return $next($request);

        switch($guards){
            case 'user':
                if(Auth::guard($guards)->check()){
                    return redirect()->route('admin.dashboard');
                }
                break;
            case 'visitor':
                if(Auth::guard($guards)->check()){
                    return redirect()->route('front.register.view');
                }
                break;
            case 'seller':
                if(Auth::guard($guards)){
                    return redirect()->route('seller.dashboard');
                }
            default:
                if(Auth::guard($guards)->check()){
                    return redirect('/dashboard');
                }
                break;
        }
    }
}
