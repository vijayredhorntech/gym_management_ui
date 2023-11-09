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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('media')->nullable();
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('plan');
            $table->string('initial_fee');
            $table->enum('personal_trainer', ['yes', 'no']);
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('mobile');
            $table->string('email');
            $table->string('gender');
            $table->string('weight');
            $table->string('height');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
