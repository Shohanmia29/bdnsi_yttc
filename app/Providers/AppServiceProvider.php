<?php

namespace App\Providers;

use App\Mixin\ResponseMixin;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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

        Schema::defaultStringLength(191);

        ResponseFactory::mixin(new ResponseMixin());
        Blade::directive('selected', function($expression){
            return "<?php echo ($expression) ? 'selected' : ''; ?>";
        });
    }
}
