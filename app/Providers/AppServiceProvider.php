<?php

namespace App\Providers;

use App\Mixin\ResponseMixin;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Blade;
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
        Paginator::useTailwind();
        Paginator::useBootstrap();


        ResponseFactory::mixin(new ResponseMixin());
        Blade::directive('selected', function($expression){
            return "<?php echo ($expression) ? 'selected' : ''; ?>";
        });
    }
}
