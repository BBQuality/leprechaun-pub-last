<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('menu_item_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_item_id')->constrained('menu_items')->cascadeOnDelete();

            $table->string('output', 50)->nullable();   // "0.3 л", "50 мл", "250 г"
            $table->string('volume', 20)->nullable();   // "мл/ml", "г/g" тощо (за потреби)
            $table->decimal('price', 10, 2);
            $table->string('currency', 10)->default('грн/UAH');

            $table->timestamps();
            $table->index(['menu_item_id']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('menu_item_variants');
    }
};
