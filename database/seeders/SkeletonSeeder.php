<?php

namespace VendorName\Skeleton\Database\Seeders;

use Illuminate\Database\Seeder;
use VendorName\Skeleton\Models\ModelName;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run($count = 1): void
    {
        ModelName::factory($count)->create();
    }
}
