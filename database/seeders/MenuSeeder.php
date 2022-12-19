<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'name'=>'Home',
            'parent_id'=>0,
            'slug'=>'home'
        ]);
        Menu::create([
            'name'=>'Shop',
            'parent_id'=>0,
            'slug'=>'shop'
        ]);
        Menu::create([
            'name'=>'ASUS',
            'parent_id'=>2,
            'slug'=>'asus'
        ]);
        Menu::create([
            'name'=>'HP',
            'parent_id'=>2,
            'slug'=>'hp'
        ]);
        Menu::create([
            'name'=>'Dell',
            'parent_id'=>2,
            'slug'=>'dell'
        ]);
        Menu::create([
            'name'=>'Cart',
            'parent_id'=>0,
            'slug'=>'cart'
        ]);
        // Menu::create([
        //     'name'=>'Blog',
        //     'parent_id'=>0,
        //     'slug'=>'blog'
        // ]);
        Menu::create([
            'name'=>'About',
            'parent_id'=>0,
            'slug'=>'about'
        ]);
        Menu::create([
            'name'=>'Contact',
            'parent_id'=>0,
            'slug'=>'contact'
        ]);
    }
}
