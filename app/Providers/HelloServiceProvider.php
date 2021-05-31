<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('hello.index', 'App\Http\Composers\HelloComposer');
    }
}
