<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        Category::create([
			'name' 	=> 'Pastries',
			'description' => 'Cakes, cookies, items baked with dough',
			'approved' => 1
		]);

		Category::create([
			'name' 	=> 'Confectionaries',
			'description' => 'Sandwiches et al.',
			'approved' => 1
		]);

		Category::create([
			'name' 	=> 'Candy',
			'description' => 'Indulge your sweet tooth',
			'approved' => 1
		]);

		Category::create([
			'name' 	=> 'Shakes',
			'description' => 'Milkshakes, fruit shakes, et al.',
			'approved' => 1
		]);
    }

}