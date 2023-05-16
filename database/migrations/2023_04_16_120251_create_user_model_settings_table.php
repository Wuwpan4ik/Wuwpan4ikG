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
        Schema::create('user_model_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->foreignId('model_id')->nullable()->index()->constrained('ai_models');
            $table->integer('max_tokens')->default(4000);
            $table->float('temperature')->default(1);
            $table->float('frequency')->default(0)->comment("Менее распространённые слова");
            $table->float('presence')->default(0)->comment("Не повторять слова");
            $table->float('top_p')->default(1)->comment("Учитывается процент выборки всех вариантов");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_model_settings');
    }
};
