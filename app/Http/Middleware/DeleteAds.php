<?php

namespace App\Http\Middleware;
use App\Events\DeleteAdsEvent;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DeleteAds
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

       event(new DeleteAdsEvent());
        return $next($request);
    }
}
