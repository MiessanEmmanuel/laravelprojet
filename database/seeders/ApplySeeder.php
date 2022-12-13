<?php

namespace Database\Seeders;

use App\Models\Apply;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ApplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apply::factory()->create([
            'lib' => 'Test job',
           'location' => 'mamamiya stop',
           'type' => 'rien de bon',
        ]);
    }
}
