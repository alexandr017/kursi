<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoursesActualizationSeeder extends Seeder
{
    public function run(): void
    {
        $import = new \App\Http\Controllers\ImportController();
        $import->coursesActualization();
    }
}