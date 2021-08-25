<?php

namespace Database\Seeders\App;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedValue = config('seed.languages');

        Language::query()->insert(
            array_map(function ($item) {
                return ['name' => $item];
            }, $seedValue)
        );
    }
}
