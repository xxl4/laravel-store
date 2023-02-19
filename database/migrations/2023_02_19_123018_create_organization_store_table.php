<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Enums\StoreTypeEnum;

class CreateOrganizationStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_store', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("organization_id")->comment("机构ID");
            $table->string("name", 100)->comment("店铺名称");
            $table->bigInteger("shop_id")->comment("店铺ID");
            $table->enum("shop_type", StoreTypeEnum::getValues())->comment("店铺类型");
            $table->json("config")->comment("店铺配置");
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
        Schema::dropIfExists('organization_store');
    }
}
