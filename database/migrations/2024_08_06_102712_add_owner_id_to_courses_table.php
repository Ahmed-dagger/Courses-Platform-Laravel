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
        
        Schema::table('courses', function (Blueprint $table) {

            if (!Schema::hasColumn('courses', 'owner_id')) {
                $table->unsignedBigInteger('owner_id')->after('id'); 
                $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');
            }
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['owner_id']);
            $table->dropColumn('owner_id');
        });
    }
};
