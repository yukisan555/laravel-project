<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\books::factory()->create([
            'bookname' => 'Test book1',
            'author' => '',
            'publisher' => '',
            'publicationdate' => '',
            'content' => '',
            'image' => '',
        ]);
    }
}
