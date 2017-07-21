<?php

namespace Foointro\Front;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class FrontServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
        $this->publishes([
            __DIR__.'/public' => public_path('foointro/front')
        ],'public');

        $this->loadViewsFrom(__DIR__ . '/views', 'front');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'front');


        /**
         * Load view composer
         */
        $this->frontViewComposer($request);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Foointro\Front\Controllers\FrontController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'front');
    }

    /**
     *
     */
    public function frontViewComposer(Request $request) {

        view()->composer('front::front*', function ($view) {
            global $request;
            $front_id = $request->get('id');
            $is_action = empty($front_id)?'add':'edit';

            $view->with('sidebar_items', [

                //list
                trans('front::front_front.list') => [
                    'url' => URL::route('front_front'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('front::front_front.'.$is_action) => [
                    'url' => URL::route('front_front.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });
    }

}
