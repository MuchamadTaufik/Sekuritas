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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('user_agent')->nullable();
            $table->string('session_id');
            $table->string('page_url');
            $table->string('referrer')->nullable();
            $table->boolean('is_unique')->default(true);
            $table->timestamp('visited_at');
            $table->timestamps();
            
            // Index untuk meningkatkan performa query
            $table->index('visited_at');
            $table->index('is_unique');
            $table->index(['ip_address', 'session_id']); // Composite index
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
