<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       Blade::directive('role', function ($role){
            $roles = explode(',', $role);
            $roles = array_map('trim', $roles);
            return "<?php if(auth()->check() && in_array(auth()->user()->role, [". implode(',', $roles) . "])) : ?>";
       });

       Blade::directive('endrole', function (){
            return "<?php endif; ?>";
       });
    }
}
