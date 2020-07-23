<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Pizza 1',
            'slug' => 'pizza-1',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 84.99,
            'image' => 'pizza_1.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 2',
            'slug' => 'pizza-2',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 68.99,
            'image' => 'pizza_2.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 3',
            'slug' => 'pizza-3',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 84.99,
            'image' => 'pizza_3.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 4',
            'slug' => 'pizza-4',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 86.99,
            'image' => 'pizza_4.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 5',
            'slug' => 'pizza-5',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 75.99,
            'image' => 'pizza_5.jpg',
        ]);
        DB::table('products')->insert([
            'name' => 'Pizza 6',
            'slug' => 'pizza-6',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 86.99,
            'image' => 'pizza_6.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 7',
            'slug' => 'pizza-7',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 76.99,
            'image' => 'pizza_7.jpg',
        ]);

        DB::table('products')->insert([
            'name' => 'Pizza 8',
            'slug' => 'pizza-8',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero',
            'price' => 85.99,
            'image' => 'pizza_8.jpg',
        ]);
    }
}
