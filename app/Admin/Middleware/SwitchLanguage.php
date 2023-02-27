<?php

namespace App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class SwitchLanguage
{
    /**
     * 根据路由自动切换语言包
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $multi_language = config('admin.multi_language');
        $languages = $multi_language['languages'];
        $current = $multi_language['default'];
        $cookie_name = $multi_language['cookie_name'];
        $cookie_language = Cookie::get($cookie_name);
        if (!$cookie_language || !array_key_exists($cookie_language, $languages)) {
            $cookie_language = $current;
        }
        App::setLocale($cookie_language);

        $controller_name = get_class($request->route()->controller);

        if (strtolower(substr($controller_name, -10)) === 'controller' and Str::startsWith($controller_name, 'App\\Admin\\Controllers\\')) {
            $controller_name = str_replace('App\\Admin\\Controllers\\', '', $controller_name);
            $controller_name = substr($controller_name, 0, strlen($controller_name) - 10);
            $translator_path = config('admin.multi_language.lang_directory') . str_replace('\\', DIRECTORY_SEPARATOR, $controller_name . DIRECTORY_SEPARATOR);
            app('translator')->addJsonPath($translator_path);
        }
        return $next($request);
    }
}