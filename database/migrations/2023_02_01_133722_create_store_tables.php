<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return config('admin.database.connection') ?: config('database.default');
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('store.database.config_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',50);
            $table->string('code',200);
            $table->text('value');
            $table->timestamps();
        });

        Schema::create(config('store.database.product_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->timestamps();
        });

        Schema::create(config('store.database.product_attr_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create(config('store.database.product_image_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create(config('store.database.product_stock_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create(config('store.database.order_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create(config('store.database.order_item_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create(config('store.database.refund_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('store.database.config_table'));
        Schema::dropIfExists(config('store.database.product_table'));
        Schema::dropIfExists(config('store.database.product_attr_table'));
        Schema::dropIfExists(config('store.database.product_image_table'));
        Schema::dropIfExists(config('store.database.product_stock_table'));
        Schema::dropIfExists(config('store.database.order_table'));
        Schema::dropIfExists(config('store.database.order_item_table'));
        Schema::dropIfExists(config('store.database.refund_table'));
    }
}
