<?php

namespace App\Http\Middleware;

use Closure;

class AuthInterceptMiddleware
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
        // TODO 验证请求是否合法
        $query              =   $request->only(['redirectUrl','appKey']);
        dump($query);
        exit;
        // TODO 是否已经授权
        //  doesn't auth
        //      TODO 存储请求体信息、取消拦截显示登录页面
        //  auth yet
        //      TODO 携带密匙、返回来源页面

        return $next($request);
    }
}
