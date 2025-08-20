<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->id();
            // ключ для коду (стабільний, унікальний): beer_draught, cocktails_shots тощо
            $table->string('key')->unique();
            $table->foreignId('parent_id')->nullable()
                ->constrained('menu_categories')->cascadeOnDelete();
            $table->enum('type', ['food','drink'])->index(); // головний поділ
            $table->string('title_ua');
            $table->string('title_en')->nullable();
            $table->smallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('menu_categories');
    }
};
