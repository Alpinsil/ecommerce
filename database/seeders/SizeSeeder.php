<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'size_number' => '35',
                'size_chart' => '20.8 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '36',
                'size_chart' => '21.6 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '37',
                'size_chart' => '22.5 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '38',
                'size_chart' => '23 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '39',
                'size_chart' => '23.5 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '40',
                'size_chart' => '24.4 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'size_number' => '41',
                'size_chart' => '25.4 cm',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        Size::insert($data);
    }
}
