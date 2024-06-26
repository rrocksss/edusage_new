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
        Schema::create('university_major_accreditations', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id');
            $table->unsignedBigInteger('major_id');
            $table->string('accreditation', 20);
            $table->primary(['university_id', 'major_id']);
            $table->foreign('university_id')->references('id')->on('universities')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('majors')->onUpdate('cascade')->onDelete('cascade');
            $table->string('accreditation')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university_major_accreditations');
    }
};
