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
        Schema::table('chats', function (Blueprint $table) {
            $table->foreignId('model_id')->nullable()->index()->constrained('ai_models');
            $table->float('temperature')->default(1);
            $table->float('frequency')->default(0)->comment("Менее распространённые слова");
            $table->float('presence')->default(0)->comment("Не повторять слова");
            $table->float('top_p')->default(1)->comment("Учитывается процент выборки всех вариантов");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chats', function (Blueprint $table) {
            $table->dropColumn('model_id');
            $table->dropColumn('temperature');
            $table->dropColumn('frequency');
            $table->dropColumn('presence');
            $table->dropColumn('top_p');
        });
    }
};
