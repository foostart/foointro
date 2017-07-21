<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailContactTable extends Migration
{
    private $_table = NULL;
    private $fields = NULL;

    public function __construct() {
        $this->_table = 'mails_contacts';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Existing table
         */
        if (!Schema::hasTable($this->_table)) {
            Schema::create($this->_table, function (Blueprint $table) {
                $table->increments('mail_contact_id');
                $table->string('mail_contact_name');
            });
        }

        /**
         * Existing fields
         */
        //mail_contact_id
        if (!Schema::hasColumn($this->_table, 'mail_contact_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('mail_contact_id');
            });
        }

        //mail_contact_name
        if (!Schema::hasColumn($this->_table, 'mail_contact_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_contact_name', 255);
            });
        }

        //mail_contact_subject
        if (!Schema::hasColumn($this->_table, 'mail_contact_subject')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_contact_subject', 255);
            });
        }

        //mail_contact_content
        if (!Schema::hasColumn($this->_table, 'mail_contact_content')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_contact_content');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mails_contacts');
    }
}
