<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('shoppings', function (Blueprint $table) {
            $table->string('alter_nate_phone');
            $table->string('state');
            $table->string('city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('shoppings', function (Blueprint $table) {
            //
        });
    }
};
