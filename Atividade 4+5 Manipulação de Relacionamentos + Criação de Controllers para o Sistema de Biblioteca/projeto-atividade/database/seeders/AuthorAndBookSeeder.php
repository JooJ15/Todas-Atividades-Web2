<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorAndBookSeeder extends Seeder
{
    public function run()
    {
        Author::factory(100)->hasBooks(10)->create();
    }
}

