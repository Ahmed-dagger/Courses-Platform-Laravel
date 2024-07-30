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
        Schema::dropIfExists('_user__form__auth');
        Schema::create('_user__form__auth', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('userStatus');
            $table->string('specialization');
            $table->string('subspeciality');
            $table->string('university');
            $table->date('graduationDate');
            $table->string('rate');
            $table->string('systemUsage');
            $table->string('systemUsageTraining')->nullable();
            $table->json('file_paths')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_user__form__auth');
    }
};
