<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class _laraplesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("_laraples")->insert([
        	"gambar" => "-",
        	"nama" => "Budi Budi",
        	"slug" => "budi-budi",
        	"asal" => "indonesia"
        ]);
    }
}
