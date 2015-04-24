<?php

use Illuminate\Database\Seeder;

use Bakesale\Menu;

class MenusTableSeeder extends Seeder {

    public function run()
    {
        Menu::create([
        	'name' => '2015 specials',
            'description' => 'All special meals served in 2015',
            'photo' => 'http://lorempixel.com/200/300'
        ]);

        Menu::create([
        	'name' => 'Happy hour specials',
            'description' => 'Enjoy the happy hour menu every friday at 8pm-10pm',
            'photo' => 'http://lorempixel.com/200/300'
        ]);
    }

}