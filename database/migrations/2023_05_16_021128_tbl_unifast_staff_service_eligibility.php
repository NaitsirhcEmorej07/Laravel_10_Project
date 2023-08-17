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
        Schema::create('tbl_unifast_staff_service_eligibility', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('eligibility');
            $table->string('rating');
            $table->string('date_of_examination');
            $table->string('place_of_examination');
            $table->string('license_no');
            $table->string('date_of_validity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_service_eligibility');
    }
};
