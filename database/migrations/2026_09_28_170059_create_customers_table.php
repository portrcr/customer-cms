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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
			$table->string('name', length:50);
			$table->string('phone', length:15);
			$table->string('email', length:30);
			$table->string('company', length:100);
			$table->enum('status', ['Registered', 'Pending Verification', 'In-Onboarding', 'Onboarded']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
