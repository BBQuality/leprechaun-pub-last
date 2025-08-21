<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
Schema::create('menu_item_variants', function (Blueprint $table) {
    $table->id();
    $table->foreignId('menu_item_id')
          ->constrained('menu_items')
          ->onDelete('cascade'); // якщо видалили страву — зносяться і всі її варіанти

    $table->decimal('output', 8, 2)->nullable();  // числове значення: 0.5, 500, 100.00
    $table->string('volume', 20)->nullable();     // одиниця виміру: "л", "гр", "мл", "пляшка"

    $table->decimal('price', 10, 2);
    $table->string('currency', 3)->default('UAH');
    $table->boolean('spec_offer')->default(false);
    $table->timestamps();
});
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_item_variants');
    }
};
