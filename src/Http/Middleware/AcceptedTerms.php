<?php

namespace Nowendwell\LaravelTerms\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AcceptedTerms
{
    public function handle(Request $request, Closure $next)
    {
        if (
            auth()->check() &&
            ! auth()->user()->hasAcceptedTerms() &&
            ! $request->routeIs('terms.show') &&
            ! $request->routeIs('terms.store')
        ) {
            return redirect()->route('terms.show');
        }

        return $next($request);
    }
}
