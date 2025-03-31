<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            // Thêm các cột mới
            $table->text('baiViet')->nullable();  // baiViet (text, nullable)
            $table->string('ghiChu', 500)->nullable();  // ghiChu (string, 500, nullable)
            $table->unsignedBigInteger('idLoai');  // idLoai (unsigned Big Integer)

            // Thiết lập khóa ngoại cho idLoai
            $table->foreign('idLoai')->references('id')->on('loaiSP')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            // Xóa khóa ngoại trước khi xóa cột
            $table->dropForeign(['idLoai']);

            // Xóa các cột đã thêm
            $table->dropColumn(['baiViet', 'ghiChu', 'idLoai']);
        });
    }
};
