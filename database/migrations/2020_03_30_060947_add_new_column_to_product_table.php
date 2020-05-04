<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnToProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('size');
            $table->text('description');
            $table->string('custom');
            $table->string('code');
            $table->integer('number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            /*$table->dropColumn('size');
            $table->dropColumn('description');
            $table->dropColumn('custom');
            $table->dropColumn('code');
            $table->dropColumn('number');*/
        });
    }
}
