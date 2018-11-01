<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Application;
use Session;

class Language {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;
    public $app;
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth, Application $app)
    {
        $this->auth = $auth;
        $this->app = $app;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = Session::get('language');
        \App::setLocale(($language != '') ? $language : 'en');
        //$this->app->setLocale(($language != '') ? $language : 'en');
        return $next($request);
    }

}