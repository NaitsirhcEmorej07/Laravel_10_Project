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
        Schema::create('tbl_unifast_staff_tap_attended', function (Blueprint $table) {
            $table->integer('staff_id');
            $table->string('training_or_program_title');
            $table->string('from');
            $table->string('to');
            $table->string('no_of_hours');
            $table->string('type');
            $table->string('conducted_or_sponseored_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_unifast_staff_tap_attended');
    }
};
