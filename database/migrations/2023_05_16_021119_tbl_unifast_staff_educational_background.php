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
        Schema::create('tbl_unifast_staff_educational_background', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('level');
            $table->string('school_name');
            $table->string('degree_or_course');
            $table->string('highest_level_or_units_earned');
            $table->string('year_graduated');
            $table->string('scholarship_or_academic_honors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_educational_background');
    }
};
