<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutHistorySeeder extends Seeder
{
    public function run(): void
    {
        $import = new \App\Http\Controllers\ImportController();
        $import->runHistory();
    }
}