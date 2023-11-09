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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('media')->nullable();
            $table->foreignId('member_id')->constrained('members');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('type', ['monthly', 'yearly']);
            $table->enum('status', ['active', 'expired', 'on hold', 'canceled']);
            $table->foreignId('payment_id')->constrained('payments');
            $table->json('days');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
