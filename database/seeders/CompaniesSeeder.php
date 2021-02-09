<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use Illuminate\Support\Str;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Company::create([
            'name' => $random = Str::random(40),
            'email' => $random = Str::random(40).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
