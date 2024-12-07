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
        Schema::create('profile', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name', 10);
            $table->string('last_name', 15)->nullable();
            $table->string('city', 20)->nullable();
            $table->string('country', 20)->nullable();
            $table->string('school', 50)->nullable();
            $table->string('position', 20)->nullable();
            $table->string('industry', 50)->nullable();
            $table->string('username', 20)->nullable();
            $table->unsignedBigInteger('id_user')->nullable()->index('fk_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
