<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class checkPage
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \Closure  $next
    //  * @return mixed
    //  **/
    public function handle($request, Closure $next)
    {
        $seo_info  = DB::table('seo')->where('url_address','=',$request->path())->first();
        $request->attributes->add(['pageInfo'=>$seo_info]);
        return $next($request);
    }
}
