<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('mail', [
    'as' => 'mail',
    'uses' => 'Foostart\Mail\Controllers\Front\MailFrontController@index'
]);
Route::get('mail/contact', [
    'as' => 'mail.contact',
    'uses' => 'Foostart\Mail\Controllers\Front\MailFrontController@contact'
]);
Route::post('mail/contact_save', [
    'as' => 'mail.contact_save',
    'uses' => 'Foostart\Mail\Controllers\Front\MailFrontController@contactSave'
]);


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////MailS ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/mail', [
            'as' => 'admin_mail',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/mail/edit', [
            'as' => 'admin_mail.edit',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/mail/edit', [
            'as' => 'admin_mail.post',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/mail/delete', [
            'as' => 'admin_mail.delete',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@delete'
        ]);

        /**
         * send mail
         */
        Route::get('admin/mail/mail_prepare', [
            'as' => 'admin_mail.mail_prepare',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@mailPrepare'
        ]);
        
        Route::post('admin/mail/send', [
            'as' => 'admin_mail.send',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailSendController@mailSend'
        ]);

        Route::get('admin/mail/mail_compose', [
            'as' => 'admin_mail.compose',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailAdminController@mailCompose'
        ]);

        /**
         * mail history
         */
        Route::get('admin/mail/mail_sent', [
            'as' => 'admin_mail.mail_sent',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailHistoryAdminController@index'
        ]);

        Route::get('admin/mail/mail_forward', [
            'as' => 'admin_mail.mail_forward',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailHistoryAdminController@mailForward'
        ]);

        Route::get('admin/mail/mail_history_delete', [
            'as' => 'admin_mail.mail_history_delete',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailHistoryAdminController@delete'
        ]);
        Route::get('admin/mail/mail_history_get_attach', [
            'as' => 'admin_mail.mail_history_get_attach',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailHistoryAdminController@getAttach'
        ]);
        /**
         * mail contact
         */
        Route::get('admin/mail/mail_contact', [
            'as' => 'admin_mail.mail_contact',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailContactAdminController@index'
        ]);
        Route::get('admin/mail/mail_contact_delete', [
            'as' => 'admin_mail.mail_contact_delete',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailContactAdminController@delete'
        ]);
        Route::get('admin/mail/mail_contact_reply', [
            'as' => 'admin_mail.mail_contact_reply',
            'uses' => 'Foostart\Mail\Controllers\Admin\MailContactAdminController@reply'
        ]);
        /**
         * google drive
         */
        Route::get('admin/drive', [
            'as' => 'admin_mail.drive',
            'uses' => 'Foostart\Mail\Controllers\Admin\GoogleDriveController@index'
        ]);
    });
});
