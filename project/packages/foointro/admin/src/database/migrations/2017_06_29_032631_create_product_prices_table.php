<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPricesTable extends Migration
{
    private $_table = NULL;
    private $fileds = NULL;
    
    public function __construct() {
        $this->_table = 'product_prices';
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
                $table->integer('product_price_id');
                $table->string('product_price_name');
            });
        }
        /**
         * Existing fields
         */
        //product_price_id
        if (!Schema::hasColumn($this->_table, 'product_price_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->primary('product_price_id');
            });
        }
        //product_price_name
        if (!Schema::hasColumn($this->_table, 'product_price_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_price_name', 255);
            });
        }
        //product_price_amout
        if (!Schema::hasColumn($this->_table, 'product_price_amout')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('product_price_amout', 255);
            });
        }
        //product_price_created_at
        if (!Schema::hasColumn($this->_table, 'product_price_created_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_price_created_at')->nullable(true);
            });
        }
        //product_price_updated_at
        if (!Schema::hasColumn($this->_table, 'product_price_updated_at')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->timestamp('product_price_updated_at')->nullable(true);
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
        Schema::dropIfExists('product_prices');
    }
}
