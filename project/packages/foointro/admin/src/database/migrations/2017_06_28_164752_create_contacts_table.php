<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    private $_table = NULL;
    private $fileds = NULL;
    
    public function __construct() {
        $this->_table = 'contacts';
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /**
         * Existing table
         */
        if (!Schema::hasTable($this->_table)) {
            Schema::create($this->_table, function (Blueprint $table) {
                $table->increments('contact_id');
                $table->string('contact_address');
            });
        }
        //
        /**
         * Existing fields
         */
        //contact_id
        if (!Schema::hasColumn($this->_table, 'contact_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('contact_id');
            });
        }
        //contact_address
        if (!Schema::hasColumn($this->_table, 'contact_address')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('contact_address', 255);
            });
        }
        //contact_content
        if (!Schema::hasColumn($this->_table, 'contact_content')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->longText('contact_content');
            });
        }
        //contact_created_at
        if (!Schema::hasColumn($this->_table, 'contact_created_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('contact_created_at')->nullable(true);
            });
        }
        //contact_updated_at
        if (!Schema::hasColumn($this->_table, 'contact_updated_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('contact_updated_at')->nullable(true);
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
        //
        Schema::dropIfExists('contacts');
    }
}
