<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    private $_table = NULL;
    private $fileds = NULL;
    
    public function __construct() {
        $this->_table = 'products';
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
                $table->increments('product_id');
                $table->string('product_name');
            });
        }
        // 
        /**
         * Existing fields
         */
        //product_id
        if (!Schema::hasColumn($this->_table, 'product_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('product_id');
            });
        }
        //product_name
        if (!Schema::hasColumn($this->_table, 'product_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_name', 255);
            });
        }
        //product_brief_description
        if (!Schema::hasColumn($this->_table, 'product_brief_description')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->mediumText('product_brief_description')->nullable(true);
            });
        }
        //product_description
        if (!Schema::hasColumn($this->_table, 'product_description')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->longText('product_description');
            });
        }
        //product_information
        if (!Schema::hasColumn($this->_table, 'product_information')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_information')->nullable(true);
            });
        }
        //product_parent
        if (!Schema::hasColumn($this->_table, 'product_parent')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('product_parent');
            });
        }
        //product_child
        if (!Schema::hasColumn($this->_table, 'product_child')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('product_child');
            });
        }
        //product_created_at
        if (!Schema::hasColumn($this->_table, 'product_created_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_created_at')->nullable(true);
            });
        }
        //product_updated_at
        if (!Schema::hasColumn($this->_table, 'product_updated_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_updated_at')->nullable(true);
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
        Schema::dropIfExists('products');
    }
}
