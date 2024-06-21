<?php

namespace Database\Seeders;

use App\Models\categorier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categorier::factory(10)->create();
    }
}
