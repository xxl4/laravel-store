<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\ProductsEnableEnum;

class AddOrganizationIdToProductsTable extends Migration
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
            $table->integer("organization_id")->after('user_id')->comment("机构ID");
            $table->string("code", 100)->after('organization_id')->comment("商品编码");
            $table->enum("enable", ProductsEnableEnum::getValues())->after('code')->comment("商品状态");
            
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
            $table->dropColumn('organization_id');
            $table->dropColumn('code');
        });
    }
}
