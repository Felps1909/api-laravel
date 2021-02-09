<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        Model::unguard();

        $this->call(CompaniesSeeder::class);
        $this->call(JobsSeeder::class);

        Model::reguard();

    }
}
