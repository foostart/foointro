<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesTable extends Migration
{
    private $_table = NULL;
    private $fileds = NULL;
    
    public function __construct() {
        $this->_table = 'product_attributes';
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
                $table->increments('product_attribute_id');
                $table->string('product_attribute_name');
            });
        }
        //
        /**
         * Existing fields
         */
        //product_attribute_id
        if (!Schema::hasColumn($this->_table, 'product_attribute_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('product_attribute_id');
            });
        }
        //product_attribute_name
        if (!Schema::hasColumn($this->_table, 'product_attribute_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_attribute_name', 255);
            });
        }
        //product_attribute_info
        if (!Schema::hasColumn($this->_table, 'product_attribute_info')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_attribute_info')->nullable(true);
            });
        }
        //product_attribute_parent
        if (!Schema::hasColumn($this->_table, 'product_attribute_parent')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('product_attribute_parent')->nullable(true);
            });
        }
        //product_attribute_created_at
        if (!Schema::hasColumn($this->_table, 'product_attribute_created_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_attribute_created_at')->nullable(true);
            });
        }
        //product_attribute_updated_at
        if (!Schema::hasColumn($this->_table, 'product_attribute_updated_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_attribute_updated_at')->nullable(true);
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
        Schema::dropIfExists('product_attributes');
    }
}
