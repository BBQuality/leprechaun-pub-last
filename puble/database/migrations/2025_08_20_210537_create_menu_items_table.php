<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('menu_categories')->cascadeOnDelete();

            $table->string('title_ua');
            $table->string('title_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_en')->nullable();

            // опціональна базова ціна (коли немає варіантів)
            $table->decimal('price', 10, 2)->nullable();
            $table->string('currency', 10)->default('грн/UAH');

            $table->boolean('spec_offer')->default(false);
            $table->boolean('is_active')->default(true);
            $table->smallInteger('sort_order')->default(0);

            $table->timestamps();

            $table->index(['category_id', 'is_active', 'sort_order']);
        });
    }

    public function down(): void {
        Schema::dropIfExists('menu_items');
    }
};
