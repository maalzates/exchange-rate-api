<?php

namespace Database\Seeders;
use App\Models\AccessLog; 

use Illuminate\Database\Seeder;

class AccessLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccessLog::factory()->count(50)->create();
    }
}
