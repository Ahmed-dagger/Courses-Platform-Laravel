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
        Schema::dropIfExists('owners');
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('Owner_name');
            $table->string('Owner_email')->unique();
            $table->string('Owner_phone',120);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Owner_password');
            $table->string('academy_name');
            $table->string('academy_type');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
