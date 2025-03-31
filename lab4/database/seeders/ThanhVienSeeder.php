<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ThanhVienSeeder extends Seeder
{
    public function run(): void
    {
        $ho = ['Nguyễn', 'Lê', 'Phan', 'Đỗ', 'Hồ', 'Võ', 'Bùi'];
        $dem = ['Thị', 'Văn', 'Đức', 'Ngọc', 'Hoàng', 'Minh', 'Kim', ''];
        $ten = ['Tâm', 'Thảo', 'Hải', 'Hòa', 'Hảo', 'Thanh', 'Tú', 'Hậu', 'Phương'];

        $thanhviens = [];

        for ($i = 1; $i <= 100; $i++) {
            // Ghép họ tên
            $hoTen = $ho[array_rand($ho)] . ' ' . $dem[array_rand($dem)] . ' ' . $ten[array_rand($ten)];
            $hoTen = trim(preg_replace('/\s+/', ' ', $hoTen)); // Xóa khoảng trắng thừa

            // Phát sinh email
            $email = Str::slug($hoTen, '') . $i . '@gmail.com';

            $thanhviens[] = [
                'hoTen' => $hoTen,
                'password' => Hash::make('hehe'),
                'email' => $email,
                'randomKey' => Str::random(10),
                'active' => rand(0, 1),
                'idGroup' => rand(0, 2),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Thêm vào bảng thanhvien
        DB::table('thanhvien')->insert($thanhviens);
    }
}
