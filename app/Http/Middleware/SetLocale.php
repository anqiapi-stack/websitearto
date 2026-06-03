<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('locale') && in_array(Session::get('locale'), ['en', 'id'])) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}
