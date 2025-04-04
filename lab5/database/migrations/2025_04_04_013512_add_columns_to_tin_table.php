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
        Schema::table('tin', function (Blueprint $table) {
            $table->string('urlHinh')->nullable(); // Thêm cột URL hình
            $table->boolean('noiBat')->default(false); // Thêm cột trạng thái nổi bật  
            $table->boolean('anHien')->default(true); // Thêm cột trạng thái hiện/ẩn  
            $table->string('tags')->nullable(); // Thêm cột tags  
            $table->string('lang', 2)->nullable(); // Thêm cột ngôn ngữ
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tin', function (Blueprint $table) {
            $table->dropColumn([
                'urlHinh',
                'noiBat',
                'anHien',
                'tags',
                'lang',
            ]);
        });
    }
};
