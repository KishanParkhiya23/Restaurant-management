<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chefs', function (Blueprint $table) {
            $table->text('discription')->nullable()->after('image');
            $table -> text('is_set')->nullable()->after('discription')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chefs', function (Blueprint $table) {
            //
        });
    }
};
