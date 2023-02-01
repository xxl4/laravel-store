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

        Schema::create(config('store.database.store'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('code',50);
            $table->string('name', 200);
            $table->text('config');
            $table->timestamps();
        });

        Schema::create(config('store.database.config_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type',50);
            $table->string('code',200);
            $table->text('value');
            $table->index(['code', 'user_id']);
            $table->timestamps();
        });

        Schema::create(config('store.database.product_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name', 200);
            $table->timestamps();
        });

        Schema::create(config('store.database.product_attr_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create(config('store.database.product_image_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create(config('store.database.product_stock_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create(config('store.database.order_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create(config('store.database.order_item_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer("order_id");
            $table->timestamps();
        });

        Schema::create(config('store.database.refund_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer("order_id");
            $table->timestamps();
        });

        Schema::create(config('store.database.refund_item_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer("refund_id");
            $table->timestamps();
        });

        Schema::create(config('store.database.storage_location_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer("refund_id");
            $table->timestamps();
        });

        Schema::create(config('store.database.organization_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->boolean("enable"); // 是否启用
            $table->char("name", 100); // 机构名称
            $table->char('code')->unique(); // 机构标识
            $table->timestamps();
        });

        //机构用户
        Schema::create(config('store.database.organization_user_table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment("用户UID");
            $table->boolean("enable")->comment("是否启用 1,0"); // 是否启用
            $table->char("name", 100)->comment("显示名称"); // 名称
            $table->integer("role_id")->comment("角色ID"); // 角色ID
            $table->index(['role_id', 'user_id',"enable"]);
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
        //配置表
        Schema::dropIfExists(config('store.database.config_table'));

        //商品表
        Schema::dropIfExists(config('store.database.product_table'));
        Schema::dropIfExists(config('store.database.product_attr_table'));
        Schema::dropIfExists(config('store.database.product_image_table'));
        Schema::dropIfExists(config('store.database.product_stock_table'));

        //订单表
        Schema::dropIfExists(config('store.database.order_table'));
        Schema::dropIfExists(config('store.database.order_item_table'));

        //售后表
        Schema::dropIfExists(config('store.database.refund_table'));
        Schema::dropIfExists(config('store.database.refund_item_table'));

        //库位表
        Schema::dropIfExists(config('store.database.storage_location_table'));

        // 机构表
        Schema::dropIfExists(config('store.database.organization_table'));
    }
}
