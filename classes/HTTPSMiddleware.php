<?php namespace PopcornPHP\RedirectToHTTPS\Classes;

use Closure;
use PopcornPHP\RedirectToHTTPS\Models\Settings;

class HTTPSMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            return redirect()->secure($request->getRequestUri(), Settings::get('statusCode'));
        }
        return $next($request);
    }
}
