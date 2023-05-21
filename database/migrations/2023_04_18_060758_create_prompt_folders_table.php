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
        Schema::create('prompt_folders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->string('title')->default('Новый раздел');
            $table->string('title_en')->default('New section');
            $table->text('main_image')->nullable();
            $table->boolean('is_main')->default(0);
            $table->string('main_background_color')->nullable();
            $table->string('main_color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prompt_folders');
    }
};
