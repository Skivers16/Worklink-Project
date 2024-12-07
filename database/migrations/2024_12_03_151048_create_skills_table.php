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
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id')->unique('id');
            $table->unsignedBigInteger('id_user')->nullable()->index('id_user');
            $table->string('description', 100)->nullable();
            $table->string('experience', 5)->nullable();
            $table->string('work_as', 30)->nullable();
            $table->string('name_skill', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
