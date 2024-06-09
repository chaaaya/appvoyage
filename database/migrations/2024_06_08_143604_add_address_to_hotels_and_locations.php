<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('hotels', function (Blueprint $table) {
        $table->string('adresse')->nullable();
    });

    Schema::table('locations', function (Blueprint $table) {
        $table->string('adresse')->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels_and_locations', function (Blueprint $table) {
            //
        });
    }
};
