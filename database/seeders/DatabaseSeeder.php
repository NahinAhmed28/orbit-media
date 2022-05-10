<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('menus')->insert([
            'id' => '1',
            'title' => 'about us',
            'location' => 'about us',
            'content' => 'about',
            'created_at' => '2021-05-21 21:02:01',
            'updated_at' => '2021-05-21 21:05:39',
        ]);
        DB::table('menuitems')->insert([
            'id' => '1',
            'title' => 'about us',
            'name' => 'about us',
            'slug' => 'about us',
            'type' => 'about us',
            'target' => 'about us',
            'menu_id' => '1',
            'created_at' => '2021-05-21 21:02:01',
            'updated_at' => '2021-05-21 21:05:39',
        ]);
        DB::table('posts')->insert([
            'id' => '1',
            'title' => 'Illo culpa dolore eo',
            'slug' => 'Illo culpa dolore eo',
            'description' => '<p>Nisi perspiciatis, e.</p>',
            'image' => '1621651621slider2.jpg',
            'category' => '1',
            'status' => 'show',
            'created_at' => '2021-05-21 21:02:01',
            'updated_at' => '2021-05-21 21:05:39',
        ]);
        DB::table('categories')->insert([
            'id' => '1',
            'title' => 'about us',
            'slug' => 'about us',
            'status' => 'show',
            'created_at' => '2021-05-21 21:02:01',
            'updated_at' => '2021-05-21 21:05:39',
        ]);
    }
}
