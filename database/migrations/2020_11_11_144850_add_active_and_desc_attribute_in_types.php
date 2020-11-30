<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActiveAndDescAttributeInTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->boolean('active')->default(0)->comment('включен/выключен');
            $table->string('desc')->nullable()->comment('описание');
            $table->string('image')->nullable()->comment('путь к изображению');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('types', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('desc');
            $table->dropColumn('image');
        });
    }
}
