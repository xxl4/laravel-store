<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditKeySecretTokenToOrganizationStoreTable extends Migration
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
            $table->string('token', 100)->nullable()->change();
            $table->string('token2', 100)->nullable()->change();
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
        });
    }
}
