<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `created_at`, `updated_at`) VALUES
            (1, 'Kamera', 'Kamera', null, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (2, 'Lensa', 'Lensa', null, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (3, 'Aksesoris', 'Aksesoris', null, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (4, 'Tripod', 'Tripod', null, '2019-08-29 12:55:52', '2019-08-29 12:55:52'),
            (5, 'Background', 'Background', null, '2019-08-29 12:55:52', '2019-08-29 12:55:52')
        ;");
    }
}
