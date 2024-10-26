<?php

namespace Database\Seeders;
use App\Models\categorys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        categorys::factory(10)->create();
    }
}
