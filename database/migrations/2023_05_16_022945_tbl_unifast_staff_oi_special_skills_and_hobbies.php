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
        Schema::create('tbl_unifast_staff_oi_special_skills_and_hobbies', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('special_skills_and_hobbies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_oi_special_skills_and_hobbies');
    }
};
