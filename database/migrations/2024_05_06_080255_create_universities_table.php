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
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('university_name', 100)->unique();
            $table->string('type', 4);
            $table->string('region_code', 3);
            $table->foreign('region_code')->references('code')->on('regions')->onUpdate('cascade')->onDelete('cascade');
            $table->string('university_name')->nullable(false);
            $table->string('type')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
