<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\usersbooks; // UsersBooksモデルをインポート

class usersbooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        usersbooks::factory()->count(50)->create(); // 50件のランダムデータを生成
    }
}
