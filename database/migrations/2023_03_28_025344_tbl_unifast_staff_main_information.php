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
        Schema::create('tbl_unifast_staff_main_information', function (Blueprint $table) {
            //2023_03_28_025344_tbl_unifast_staff
            $table->id('staff_id');
            $table->string('id_no');
            $table->string('prefix');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');  
            $table->string('suffix');
            $table->string('title');
            $table->string('unifast_office');
            $table->string('designation');
            $table->string('designation_abbreviation');
            $table->string('employment_type');
            $table->string('unit');
            $table->string('status');

            //ADDITIONAL CREDENTIALS (email_verified_at, password, remember_token)
            $table->string('email_address');
            $table->timestamp('email_verified_at')->nullable()->default(null);
            $table->string('password');
            $table->string('remember_token');

            //INTEGRATED 2023_05_16_015919_tbl_unifast_staff_personal_information
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_main_information');
    }
};

