<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DienThoaiSeeder extends Seeder
{
    public function run(): void
    {
        $dienthoais = [];
        $tenDTs = ['Oppo XA', 'iPhone XS Max', 'Nokia Pro'];

        for ($i = 1; $i <= 300; $i++) {
            $tenDT = $tenDTs[array_rand($tenDTs)];

            // Phát sinh giá theo tên
            if ($tenDT === 'Oppo XA') {
                $gia = mt_rand(700000, 1000000);
            } elseif ($tenDT === 'iPhone XS Max') {
                $gia = mt_rand(500000, 800000);
            } else {
                $gia = mt_rand(250000, 500000);
            }

            $dienthoais[] = [
                'tenDT' => $tenDT . ' ' . $i,
                'moTa' => 'Mô tả cho ' . $tenDT,
                'ngayCapNhat' => now(),
                'gia' => $gia,
                'giaKM' => $gia * 0.9,
                'urlHinh' => Str::slug($tenDT) . '.jpg',
                'soLuongTonKho' => mt_rand(0, 100),
                'hot' => (bool)rand(0, 1),
                'anHien' => (bool)rand(0, 1),
                'baiViet' => 'Bài viết cho ' . $tenDT,
                'ghiChu' => null,
                'idLoai' => mt_rand(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Thêm vào database
        DB::table('dienthoai')->insert($dienthoais);
    }
}
