<?php

namespace Database\Seeders;

use App\Models\Indice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(database_path('kendi_teambuilding_indices.sql')));
    }
}
