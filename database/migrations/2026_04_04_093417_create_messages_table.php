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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('service_interest'); // Menangkap pilihan dropdown
            $table->text('message');
            $table->boolean('is_read')->default(false);    // Flag sudah dibaca
            $table->boolean('is_replied')->default(false); // Flag sudah dibalas
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('budget')->nullable();
            $table->string('timeline')->nullable();
            $table->string('how_did_you_hear')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
