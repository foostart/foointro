<?php

namespace Foointro\Admin;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;

use URL, Route;
use Illuminate\Http\Request;


class AdminServiceProvider extends ServiceProvider {

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
            __DIR__.'/public' => public_path('foointro/admin')
        ],'public');
        $this->publishes([
            __DIR__.'/configs' => config_path('')
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'admin');


        /**
         * Translations
         */
         $this->loadTranslationsFrom(__DIR__.'/lang', 'admin');


        /**
         * Load view composer
         */
        $this->adminViewComposer($request);
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
        $this->app->make('Foointro\Admin\Controllers\MenuController');
        $this->app->make('Foointro\Admin\Controllers\ProductController');
        $this->app->make('Foointro\Admin\Controllers\ProductAttributeController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');
    }

    /**
     *
     */
    public function adminViewComposer(Request $request) {
        view()->composer('admin::*', function ($view) {
            global $request;
            $admin_id = $request->get('id');
            // var_dump($admin_id);
            // $currentURI = Route::current()->uri();
            $currentName = Route::currentRouteName();
            // var_dump($currentName);
            $is_action = empty($admin_id)?'add':'edit';
            // $is_uri = $currentName == 'admin_product.edit' ? 'admin_product.edit' :  'admin_product.attribute.edit';
            $is_uri = $currentName == 'admin_product.attribute.edit' ? 'admin_product.attribute.edit' :  'admin_product.edit';

            if(Route::is('admin_menu*')){
                $view->with('sidebar_items', [
                        //list
                        trans('admin::admin.list_menu') => [
                            'url' => URL::route('admin_menu'),
                            "icon" => '<i class="fa fa-users"></i>'
                        ],
                        //add
                        trans('admin::admin.'.$is_action) => [
                            'url' => URL::route('admin_menu.edit'),
                            "icon" => '<i class="fa fa-users"></i>'
                        ],
                ]);
            } elseif(Route::is('admin_product*')){
                $view->with('sidebar_items', [
                        //list
                        trans('admin::admin.list_product') => [
                            'url' => URL::route('admin_product'),
                            "icon" => '<i class="fa fa-users"></i>'
                        ],
                        //add
                        trans('admin::admin.'.$is_action) => [
                            'url' => URL::route($is_uri),
                            "icon" => '<i class="fa fa-users"></i>'
                        ],
                        //list
                        trans('admin::admin.list_product_attribute') => [
                            'url' => URL::route('admin_product.attribute.list'),
                            "icon" => '<i class="fa fa-users"></i>'
                        ],
                        // //add
                        // trans('admin::admin.'.$is_action) => [
                        //     'url' => URL::route('admin_product.attribute.edit'),
                        //     "icon" => '<i class="fa fa-users"></i>'
                        // ],
                ]);
            }
            //
        });
    }
}