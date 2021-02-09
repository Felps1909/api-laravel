<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::create([
            'title' => 'Programador',
            'description' => 'Vaga desenvolvedor FullStack Junior',
            'local' => 'São Paulo / SP',
            'remote' => 'no',
            'type' => 3,
            'company_id' => 1,
        ]);
    }
}
