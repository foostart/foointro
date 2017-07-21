<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    private $_table = NULL;
    private $fileds = NULL;
    
    public function __construct() {
        $this->_table = 'menus';
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
                $table->increments('menu_id');
                $table->string('menu_name');
            });
        }
        //
        /**
         * Existing fields
         */
        //menu_id
        if (!Schema::hasColumn($this->_table, 'menu_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('menu_id');
            });
        }
        //menu_name
        if (!Schema::hasColumn($this->_table, 'menu_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('menu_name', 255);
            });
        }
        //menu_parent
        if (!Schema::hasColumn($this->_table, 'menu_parent')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('menu_parent')->default(0);
            });
        }
        //menu_slug
        if (!Schema::hasColumn($this->_table, 'menu_slug')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('menu_slug', 255);
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
        Schema::dropIfExists('menus');
    }
}
