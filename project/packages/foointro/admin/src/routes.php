<?php

use Illuminate\Session\TokenMismatchException;
/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {
        // /////////////////////////////////////////////////////////////////////////////
        // /////////////////////// MENU ////////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/menu', [
            'as' => 'admin_menu',
            'uses' => 'Foointro\Admin\Controllers\MenuController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/menu/edit', [
            'as' => 'admin_menu.edit',
            'uses' => 'Foointro\Admin\Controllers\MenuController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/menu/edit', [
            'as' => 'admin_menu.post',
            'uses' => 'Foointro\Admin\Controllers\MenuController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/menu/delete', [
            'as' => 'admin_menu.delete',
            'uses' => 'Foointro\Admin\Controllers\MenuController@delete'
        ]);
        // /////////////////////////////////////////////////////////////////////////////
        // /////////////////////// PRODUCT /////////////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/product', [
            'as' => 'admin_product',
            'uses' => 'Foointro\Admin\Controllers\ProductController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/product/edit', [
            'as' => 'admin_product.edit',
            'uses' => 'Foointro\Admin\Controllers\ProductController@edit'
        ]);

        /**
         * edit-add dynamic
         */
        Route::get('admin/product/edit/get_data', [
            'as' => 'admin_product.edit.get_data',
            'uses' => 'Foointro\Admin\Controllers\ProductController@get_data'
        ]);

        /**
         * get attribute
         */
        Route::get('admin/product/edit/get_attribute', [
            'as' => 'admin_product.edit.get_attribute',
            'uses' => 'Foointro\Admin\Controllers\ProductController@get_attribute'
        ]);

        /**
         * post
         */
        Route::post('admin/product/edit', [
            'as' => 'admin_product.post',
            'uses' => 'Foointro\Admin\Controllers\ProductController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/product/delete', [
            'as' => 'admin_product.delete',
            'uses' => 'Foointro\Admin\Controllers\ProductController@delete'
        ]);
        // /////////////////////////////////////////////////////////////////////////////
        // /////////////////////// PRODUCT ATTRIBUTE ///////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/product/attribute', [
            'as' => 'admin_product.attribute.list',
            'uses' => 'Foointro\Admin\Controllers\ProductAttributeController@index'
        ]);
        /**
         * edit-add
         */
        Route::get('admin/product/attribute/edit', [
            'as' => 'admin_product.attribute.edit',
            'uses' => 'Foointro\Admin\Controllers\ProductAttributeController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/product/attribute/edit', [
            'as' => 'admin_product.attribute.post',
            'uses' => 'Foointro\Admin\Controllers\ProductAttributeController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/product/attribute/delete', [
            'as' => 'admin_product.attribute.delete',
            'uses' => 'Foointro\Admin\Controllers\ProductAttributeController@delete'
        ]);
        // /////////////////////////////////////////////////////////////////////////////
        // /////////////////////// PRODUCT PRICE ///////////////////////////////////////
        // /////////////////////////////////////////////////////////////////////////////
    });
});
