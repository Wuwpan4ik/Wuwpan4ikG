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
        Schema::create('prompts', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->foreignId('user_id')->nullable()->index()->constrained('users')->onDelete('CASCADE');
            $table->foreignId('folder_id')->nullable()->index()->constrained('prompt_folders')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prompts');
    }
};
