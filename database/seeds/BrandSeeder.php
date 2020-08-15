<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `brands` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
            (1, 'Canon', 'Canon', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (2, 'Nikon', 'Nikon', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (3, 'FujiFilm', 'FujiFilm', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (4, 'Sony', 'Sony', '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (5, 'Sandisk', 'Sandisk', '2019-08-29 12:55:52', '2019-08-29 12:55:52')
        ;");
    }
}
