<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Page::create([
            'title' => 'Homepage',
            'date' => null,
            'tags' => 'NEW,SPECIAL',
            'star' => false,
            'created_at' => '2022-02-17 00:51:01',
            'updated_at' => '2022-06-25 14:30:21',
        ]);

        \App\Models\Page::create([
            'title' => 'Blog',
            'date' => '2022-06-25',
            'tags' => 'NEW',
            'star' => true,
            'created_at' => '2022-06-25 14:30:33',
            'updated_at' => '2022-06-25 14:30:33',
        ]);

        \App\Models\Page::create([
            'title' => 'About us',
            'date' => '2022-06-25',
            'tags' => null,
            'star' => true,
            'created_at' => '2022-06-25 14:38:58',
            'updated_at' => '2022-06-25 14:37:40',
        ]);

        \App\Models\Page::create([
            'title' => 'Conctact',
            'date' => '2022-06-25',
            'tags' => 'CODE,SPECIAL',
            'star' => true,
            'created_at' => '2022-06-25 14:37:12',
            'updated_at' => '2022-06-25 14:39:16',
        ]);

        \App\Models\Page::create([
            'title' => 'Cases',
            'date' => '2022-06-25',
            'tags' => null,
            'star' => true,
            'created_at' => '2022-06-25 14:37:22',
            'updated_at' => '2022-06-25 14:37:36',
        ]);

        \App\Models\Page::create([
            'title' => 'Clients',
            'date' => '2022-06-25',
            'tags' => 'SPECIAL',
            'star' => true,
            'created_at' => '2022-06-25 14:37:28',
            'updated_at' => '2022-06-25 14:37:28',
        ]);
    }
}
