<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('title_ua');
            $table->string('title_en');
            $table->string('type'); // food / drink / cocktail
            $table->foreignId('parent_id')->nullable()->constrained('menu_categories')->onDelete('cascade');
            $table->integer('sort_order')->default(0); // для ручного сортування
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menu_categories');
    }
};
