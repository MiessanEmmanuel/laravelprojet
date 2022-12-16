<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applies')->insert([
            'lib' => 'Delivery person',
           'description'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem laboriosam eos minima vel animi nisi expedita libero quisquam! Quia reiciendis minima laboriosam autem eius provident error iure delectus totam dignissimos.',
            'location' => 'Washington',
            'type' => 'Full time'
        ]);
    }
}
