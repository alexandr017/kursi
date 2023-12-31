<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UrlTypesSeeder::class,
            UrlsSeeder::class,
            EmployeesSeeder::class,
            PostSeeder::class,
            CompaniesSeeder::class,
//            CommentsSeeder::class,
            SeoForPageSeeder::class,
            TagsSeeder::class,
            CoursesSeeder::class,
            SchoolsReviewsSeeder::class,
            PageSeeder::class,
            AboutHistorySeeder::class,
            UserRolesSeeder::class
        ]);
    }
}
