<?php

namespace Database\Seeders\App;

use App\Models\PackageType;
use Illuminate\Database\Seeder;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seedValue = config('seed.package_type');

        PackageType::query()->insert(
            array_map(function ($item) {
                return ['name' => $item];
            }, $seedValue)
        );
    }
}
