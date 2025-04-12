<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo 10 user ngẫu nhiên bằng factory
        User::factory()->count(10)->create();

        // Chèn user cụ thể
        User::insert([
            [
                'name' => 'Vui Từng Phút Giây',
                'email' => 'vuiqua@gmail.com',
                'password' => bcrypt('hehe'),
                'idgroup' => 1,
                'diachi' => 'TPHCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Buồn Từng Phút Giây',
                'email' => 'buonqua@gmail.com',
                'password' => bcrypt('huhu'),
                'idgroup' => 1,
                'diachi' => 'TPHCM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nguyen Thi Gia Hu',
                'email' => 'giahu@gmail.com',
                'password' => bcrypt('hihi'),
                'idgroup' => 0,
                'diachi' => 'HN',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
