<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['name' => 'mare', 'color' => '#0d6efd'],
            ['name' => 'montagna', 'color' => '#198754'],
            ['name' => 'città', 'color' => '#6f42c1'],
            ['name' => 'relax', 'color' => '#20c997'],
            ['name' => 'avventura', 'color' => '#fd7e14'],
            ['name' => 'cibo', 'color' => '#dc3545'],
            ['name' => 'cultura', 'color' => '#6610f2'],
            ['name' => 'natura', 'color' => '#198754'],
            ['name' => 'sport', 'color' => '#ffc107'],
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
