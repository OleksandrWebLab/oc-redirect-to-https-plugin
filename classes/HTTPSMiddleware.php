<?php namespace PopcornPHP\RedirectToHTTPS\Classes;

use Closure;

class HTTPSMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            return redirect()->secure($request->getRequestUri(), \PopcornPHP\RedirectToHTTPS\Models\Settings::get( 'statusCode' ) );
        }

        return $next($request);
    }
}
