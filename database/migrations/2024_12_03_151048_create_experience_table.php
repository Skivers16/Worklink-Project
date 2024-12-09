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
            $table->text('description')->nullable();
            $table->string('profile_headline', 100)->nullable();
            $table->string('end_year', 10)->nullable();
            $table->string('end_date', 10)->nullable();
            $table->string('start_year', 10)->nullable();
            $table->string('start_date', 10)->nullable();
            $table->string('location', 100)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('employment_type', 50)->nullable();
            $table->string('Title', 100)->nullable();
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
