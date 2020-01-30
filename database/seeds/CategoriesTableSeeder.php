<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Frutas y Hortalizas',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => 'category-1',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-24 18:51:03',
            ),
            1 => 
            array (
                'id' => 1,
                'name' => 'Víveres',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => 1,
                'order' => 1,
                'slug' => 'bodegon',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-29 15:25:51',
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'Bebidas',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:53:03',
                'updated_at' => '2020-01-29 15:26:01',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'Bodegón',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:55',
                'updated_at' => '2020-01-29 15:26:16',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Hogar y juguetes',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:41',
                'updated_at' => '2020-01-29 15:26:28',
            ),
            5 => 
            array (
                'id' => 5,
                'name' => 'Chocolates, Cereales y Snacks',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-24 18:52:12',
                'updated_at' => '2020-01-29 15:27:05',
            ),
            6 => 
            array (
                'id' => 4,
                'name' => 'Cuidado Personal',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => 'category-2',
                'status' => 'A',
                'created_at' => '2020-01-23 22:26:37',
                'updated_at' => '2020-01-29 15:27:45',
            ),
            7 => 
            array (
                'id' => 2,
                'name' => 'Aseo del Hogar',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:28:12',
                'updated_at' => '2020-01-29 15:28:12',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Mascotas',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:28:51',
                'updated_at' => '2020-01-29 15:28:51',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Quesos y Charcutería',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:29:17',
                'updated_at' => '2020-01-29 15:29:17',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Pollo y Carnes',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:29:30',
                'updated_at' => '2020-01-29 15:29:30',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Verduras, Frutas y Hortalizas',
                'description' => NULL,
                'image' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'slug' => NULL,
                'status' => 'A',
                'created_at' => '2020-01-29 15:29:49',
                'updated_at' => '2020-01-29 15:29:49',
            ),
        ));
        
        
    }
}