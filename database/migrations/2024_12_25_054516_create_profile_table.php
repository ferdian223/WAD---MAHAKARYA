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
            $table->id();
            // Personal Information
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('password');
            
            // Additional Information
            $table->text('address')->nullable();
            $table->string('passport_number')->nullable();
            $table->enum('status', ['active', 'inactive', 'pending'])->default('pending');
            
            // Account Management
            $table->boolean('is_active')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes(); // For soft deletion of accounts
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
