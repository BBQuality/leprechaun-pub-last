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
        // Перевіряємо, чи таблиця існує
        if (Schema::hasTable('feedback')) {
            Schema::table('feedback', function (Blueprint $table) {
                if (!Schema::hasColumn('feedback', 'first_name')) {
                    $table->string('first_name')->after('id');
                }
                if (!Schema::hasColumn('feedback', 'last_name')) {
                    $table->string('last_name')->after('first_name');
                }
            });
        } else {
            Schema::create('feedback', function (Blueprint $table) {
                $table->id();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('phone')->nullable();
                $table->string('email')->nullable();
                $table->text('message');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('feedback')) {
            Schema::table('feedback', function (Blueprint $table) {
                if (Schema::hasColumn('feedback', 'first_name')) {
                    $table->dropColumn('first_name');
                }
                if (Schema::hasColumn('feedback', 'last_name')) {
                    $table->dropColumn('last_name');
                }
            });
        }
    }
};
