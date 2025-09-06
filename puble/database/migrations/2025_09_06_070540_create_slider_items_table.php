<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('slider_items', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Назва позиції
            $table->text('description')->nullable(); // опис
            $table->string('slogan')->nullable(); // короткий слоган
            $table->decimal('price', 8, 2)->nullable(); // ціна
            $table->string('image'); // шлях до картинки
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slider_items');
    }
};
