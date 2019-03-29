<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Locale
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
        // Lấy kiểu ngôn ngữ được lưu trong Session, nếu không có thì trả về default lấy trong config
        $language = Session::get('language', config('app.locale'));

        // Chuyển ngôn ngữ cho ứng dụng
        config(['app.locale' => $language]);

        return $next($request);
    }
}
