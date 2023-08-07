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
        Schema::create('tbl_unifast_staff_work_experience', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('from');
            $table->string('to');
            $table->string('position_title');
            $table->string('company_or_agency');
            $table->string('monthly_salary');
            $table->string('status_of_appointment');
            $table->string('is_government_service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_work_experience');
    }
};
