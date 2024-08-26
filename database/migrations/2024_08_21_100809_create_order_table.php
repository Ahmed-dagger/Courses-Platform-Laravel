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
        Schema::dropIfExists('order');
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('total_price')->default(0);
            $table->unsignedInteger('transaction_id')->default(0);
            $table->string('transaction_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
