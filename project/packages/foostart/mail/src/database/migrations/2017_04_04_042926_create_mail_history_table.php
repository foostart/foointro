<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailHistoryTable extends Migration
{
    private $_table = NULL;
    private $fields = NULL;

    public function __construct() {
        $this->_table = 'mails_histories';
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
                $table->increments('mail_history_id');
                $table->string('mail_history_name');
            });
        }

        /**
         * Existing fields
         */
        //mail_history_id
        if (!Schema::hasColumn($this->_table, 'mail_history_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('mail_history_id');
            });
        }

        //mail_history_name
        if (!Schema::hasColumn($this->_table, 'mail_history_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_history_name');
            });
        }

        //mail_history_subject
        if (!Schema::hasColumn($this->_table, 'mail_history_subject')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_history_subject', 100);
            });
        }

        //mail_history_content
        if (!Schema::hasColumn($this->_table, 'mail_history_content')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_history_content');
            });
        }

        //mail_history_attach
        if (!Schema::hasColumn($this->_table, 'mail_history_attach')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('mail_history_attach', 255)->nullable();
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
        Schema::dropIfExists('mails_histories');
    }
}
