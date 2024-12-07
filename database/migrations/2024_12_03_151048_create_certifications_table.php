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
        Schema::create('certifications', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('id');
            $table->unsignedBigInteger('id_user')->nullable()->index('id_user');
            $table->string('description', 100)->nullable();
            $table->string('location', 20)->nullable();
            $table->string('end_year', 10)->nullable();
            $table->string('end_date', 10)->nullable();
            $table->string('start_year', 10)->nullable();
            $table->string('start_date', 10)->nullable();
            $table->string('organization', 20)->nullable();
            $table->string('name', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certifications');
    }
};
