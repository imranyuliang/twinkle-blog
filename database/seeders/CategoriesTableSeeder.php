<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programing = new Category();
        $programing->slug = 'Programing';
		$programing->name = 'Programing';
		$programing->save();

		$wordpress = new Category();
		$wordpress->slug = 'Wordpress';
		$wordpress->name = 'Wordpress';
		$wordpress->save();

		$laravel = new Category();
		$laravel->slug = 'Laravel';
		$laravel->name = 'Laravel';
		$laravel->save();
    }
}
