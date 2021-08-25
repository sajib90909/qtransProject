<?php

namespace Database\Seeders\App;

use App\Models\FieldOfText;
use Illuminate\Database\Seeder;

class FieldOfTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedValue = config('seed.field_of_text');

        FieldOfText::query()->insert(
            array_map(function ($item) {
                return ['name' => $item];
            }, $seedValue)
        );
    }
}
