<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function datetime()
    {
        $mytime = Carbon::now();
        return $mytime->format('l, F d, Y');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('layout.app', function ($view) {
            $user = '';
            if (Auth::check()) {
                $user = Profile::where('user_id', Auth::user()->id)->first();
            }

            $trending = Post::orderBy('created_at', 'desc')->limit(5)->get(['id','title']);

            $view->with('datetime', $this->datetime())
                ->with('auth', Auth::check())
                ->with('user', $user)
                ->with('trending', $trending);
        });
    }
}
