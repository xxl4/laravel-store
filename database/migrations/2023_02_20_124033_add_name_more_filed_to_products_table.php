<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameMoreFiledToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            //$table->string("name", 100)->after('name')->commend("名称");
            $table->integer("cid")->after('name')->commend("分类ID");
            $table->float("price", 10,2)->after('name')->commend("价格");
            $table->string("image", 100)->after('name')->commend("图片");
            $table->string("props", 100)->after('name')->commend("属性");
            $table->string("customer_props", 100)->after('name')->commend("属性");
            $table->text("desc")->after('name')->commend("介绍");
            $table->char("outer_id",20)->after('name')->commend("外部ID");
            $table->timestamp("market_time", 0)->after('name')->commend("上架时间");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('cid');
            $table->dropColumn('price');
            $table->dropColumn('image');
            $table->dropColumn('props');
            $table->dropColumn('customer_props');
            $table->dropColumn('desc');
            $table->dropColumn('outer_id');
            $table->dropColumn('market_time');
        });
    }
}
