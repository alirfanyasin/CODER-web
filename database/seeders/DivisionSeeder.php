<?php

namespace Database\Seeders;

use App\Models\Admin\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::create([
            'name' => 'Web Development',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'icon' => 'icon-park-outline:code-computer'
        ]);
    }
}
