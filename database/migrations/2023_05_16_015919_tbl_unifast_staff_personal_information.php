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
        Schema::create('tbl_unifast_staff_personal_information', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('height');
            $table->string('weight');  
            $table->string('blood_type');
            $table->string('gsis_no');
            $table->string('pagibig_no');
            $table->string('philhealth_no');
            $table->string('sss_no');
            $table->string('tin_no');
            $table->string('citizenship');
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->string('telephone_no');
            $table->string('mobile_no');
            $table->string('email_address_personal_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_personal_information');
    }
};
