<?php

namespace Database\Seeders;

use Database\Seeders\App\FieldOfTextSeeder;
use Database\Seeders\App\LanguageSeeder;
use Database\Seeders\App\PackageTypeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FieldOfTextSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(PackageTypeSeeder::class);
    }
}
