<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeySecretTokenToOrganizationStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organization_store', function (Blueprint $table) {
            //
            $table->string("key", 100)->after('config')->comment("key信息");
            $table->string("secret", 100)->after('key')->comment("secret信息");
            $table->string("token", 100)->after('secret')->comment("api token 信息");
            $table->string("token2", 100)->after('token')->comment("api token2 信息");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organization_store', function (Blueprint $table) {
            //
            $table->dropColumn('key');
            $table->dropColumn('secret');
            $table->dropColumn('token');
            $table->dropColumn('token2');
        });
    }
}
