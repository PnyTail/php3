<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chenLoaisp extends Seeder
{
    public function run(): void
    {
        $loaiSPs = [
            ['tenLoai' => 'iPhone', 'thuTu' => 1, 'anHien' => 1, 'urlHinh' => 'iphone.jpg'],
            ['tenLoai' => 'Samsung', 'thuTu' => 2, 'anHien' => 1, 'urlHinh' => 'samsung.jpg'],
            ['tenLoai' => 'Xiaomi', 'thuTu' => 3, 'anHien' => 1, 'urlHinh' => 'xiaomi.jpg'],
            ['tenLoai' => 'Oppo', 'thuTu' => 4, 'anHien' => 1, 'urlHinh' => 'oppo.jpg'],
            ['tenLoai' => 'Vivo', 'thuTu' => 5, 'anHien' => 1, 'urlHinh' => 'vivo.jpg'],
            ['tenLoai' => 'Realme', 'thuTu' => 6, 'anHien' => 1, 'urlHinh' => 'realme.jpg'],
            ['tenLoai' => 'Nokia', 'thuTu' => 7, 'anHien' => 1, 'urlHinh' => 'nokia.jpg'],
            ['tenLoai' => 'Huawei', 'thuTu' => 8, 'anHien' => 1, 'urlHinh' => 'huawei.jpg'],
            ['tenLoai' => 'Sony', 'thuTu' => 9, 'anHien' => 1, 'urlHinh' => 'sony.jpg'],
            ['tenLoai' => 'Google Pixel', 'thuTu' => 10, 'anHien' => 1, 'urlHinh' => 'google-pixel.jpg'],
        ];

        // Thêm vào database
        DB::table('loaiSP')->insert($loaiSPs);
    }
}
