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
        Schema::create('experience', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('id');
            $table->string('description', 200)->nullable();
            $table->string('profile_headline', 50)->nullable();
            $table->string('end_year', 10)->nullable();
            $table->string('end_date', 10)->nullable();
            $table->string('start_year', 10)->nullable();
            $table->string('start_date', 10)->nullable();
            $table->string('location', 30)->nullable();
            $table->string('company_name', 20)->nullable();
            $table->string('employment_type', 30)->nullable();
            $table->string('Title', 30)->nullable();
            $table->unsignedBigInteger('id_user')->nullable()->index('id_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
