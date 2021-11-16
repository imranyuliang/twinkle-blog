<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
		$admin->name = 'Admin';
		$admin->save();

		$author = new Role();
		$author->name = 'Author';
		$author->save();

		$subscriber = new Role();
		$subscriber->name ='Subscriber';
		$subscriber->save();
    }
}
