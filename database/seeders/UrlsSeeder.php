<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UrlsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('urls')->insert([
            ['url' => 'test/page','section_type' => 1, 'section_id' => 11],
        ]);

    }
}
