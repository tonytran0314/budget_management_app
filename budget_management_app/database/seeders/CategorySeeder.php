<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Carbon;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            'Ăn uống',
            'Xăng',
            'Tiền lương',
            'Tiền điện',
            'Tiền nước',
            'Internet',
            'Netflix',
            'Youtube Premium',
            'Spotify',
            'Amazon',
            'Ăn vặt',
            'Sửa xe',
            'Thuốc',
            'Gửi xe',
            'Phí cầu đường',
            'Mỹ phẩm',
            'Quần áo',
            'Nội thất',
            'Phụ kiện thú cưng',
            'Đồ công nghệ',
            'Chất tẩy rửa',
            'Thuế',
            'Freelance',
            'Tiền mừng tuổi',
            'Lương hưu',
            'Từ thiện',
            'Tiền phạt',
            'Đầu tư'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
