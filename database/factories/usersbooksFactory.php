<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class usersbooksFactory extends Factory
{
    protected $model = usersbooks::class; // 関連付けるモデル

    public function definition(): array
    {
        return [
            'users_id' => fake()->numberBetween(1, 10),  // ユーザーID（1～10のランダム値）
            'books_id' => fake()->numberBetween(1, 50),  // 本ID（1～50のランダム値）
            'states' => fake()->numberBetween(0, 2),     // 0: 未読, 1: 読み中, 2: 読了
            'episode' => fake()->numberBetween(1, 100),  // エピソード数
            'review' => fake()->numberBetween(1, 5),     // 星評価
            'deleteat' => Carbon::now()->addDays(fake()->numberBetween(10, 365)), // ランダムな日付
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
