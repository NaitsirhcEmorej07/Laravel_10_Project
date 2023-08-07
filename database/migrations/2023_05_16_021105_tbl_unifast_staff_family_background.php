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
        Schema::create('tbl_unifast_staff_family_background', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('spouse_name');
            $table->string('spouse_occupation');
            $table->string('spouse_employer_or_business');
            $table->string('spouse_employer_or_business_address');
            $table->string('spouse_contact_number');
            $table->string('fathers_name');
            $table->string('mothers_maiden_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_family_background');
    }
};
