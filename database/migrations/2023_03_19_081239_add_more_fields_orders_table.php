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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name')->nullable()->after('totalAmount');
            $table->string('email')->nullable()->after('name');
            $table->string('contact')->nullable()->after('email');
            $table->string('type')->nullable()->after('contact')->comment('1:delivery,2:takeaway,3:onTable');
            $table->string('address')->nullable()->after('type');
            $table->string('zipcode')->nullable()->after('address');
            $table->string('table')->nullable()->after('zipcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
