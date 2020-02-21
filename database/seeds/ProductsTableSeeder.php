<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Leche Camprolac',
                'description_short' => 'Leche en Polvo Completa',
                'description' => '<p>Leche en polvo completa camprolat para adultos y ni&ntilde;os</p>',
                'price' => '250000.000000',
                'qty_avaliable' => 0,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 0,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '12312',
                'promote' => 0,
                'discount' => '90.000000',
                'photo' => 'products\\February2020\\b8fNEnzO4QAMYk896zDu.jpeg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => NULL,
                'updated_at' => '2020-02-17 18:48:49',
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Salsa Heinz 230g',
                'description_short' => 'Salsa de tomate heinz',
                'description' => NULL,
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\5fKFgETD8FfpaKiTiPOP.jpg',
                'stores_id' => 1,
                'brands_id' => 3,
                'created_at' => '2020-02-04 22:41:48',
                'updated_at' => '2020-02-17 18:51:11',
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'Harina Pan',
                'description_short' => 'Harina de Maíz Blanco',
                'description' => '<p>oio</p>',
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => '123412343',
                'promote' => 0,
                'discount' => '99.900000',
                'photo' => 'products\\February2020\\uEp1voHoZlMyrqFBNmHv.jpg',
                'stores_id' => 1,
                'brands_id' => 2,
                'created_at' => NULL,
                'updated_at' => '2020-02-21 20:13:16',
            ),
            3 => 
            array (
                'id' => 10,
                'name' => 'Mayonesa hellmann',
                'description_short' => 'Mayonesa hellmann',
                'description' => NULL,
                'price' => '2000000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\Qo8PRpqvkl7wwKwtcZIe.png',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:34:04',
                'updated_at' => '2020-02-21 20:13:41',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'PASTA PARMIGIANA CORTA  250G',
                'description_short' => 'PASTA PARMIGIANA CORTA  250G GRUESA HUEVO',
                'description' => NULL,
                'price' => '90000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\1xcv3bpAzzcy8fZe64ez.jpeg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:29:20',
                'updated_at' => '2020-02-21 20:13:58',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Arroz Mary 1KG',
                'description_short' => 'ARROZ MARY SUPERIOR 97% 1KG',
                'description' => NULL,
                'price' => '125800.500000',
                'qty_avaliable' => 12,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\H0gBCESzNOtb4n0Mcnbp.jpg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:23:30',
                'updated_at' => '2020-02-21 20:14:13',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Salsa Iinglesa Olympia 150 CC',
                'description_short' => 'Salsa Iinglesa Olympia',
                'description' => NULL,
                'price' => '50000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\fpMrYBs3AS0BlHceADHc.jpg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:17:59',
                'updated_at' => '2020-02-21 20:14:25',
            ),
            7 => 
            array (
                'id' => 6,
                'name' => 'Ron Cacique 500 1,5 L',
                'description_short' => 'Ron Cacique',
                'description' => NULL,
                'price' => '500000.000000',
                'qty_avaliable' => 50,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\QxBJmSOSrd9o7FK9sFHb.jpg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:13:58',
                'updated_at' => '2020-02-21 20:14:40',
            ),
            8 => 
            array (
                'id' => 5,
                'name' => 'Coca cola 2L',
                'description_short' => 'Coca colar',
                'description' => NULL,
                'price' => '90000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\QupwfUHuoUGWE7gw8W2a.png',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:11:39',
                'updated_at' => '2020-02-21 20:14:54',
            ),
            9 => 
            array (
                'id' => 4,
                'name' => 'Aceite Vatel',
                'description_short' => 'Aceite Vatel de Soya',
                'description' => NULL,
                'price' => '100000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 0,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\A1XlgSiXcYXqXdb2CwUm.jpeg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:08:14',
                'updated_at' => '2020-02-21 20:15:05',
            ),
            10 => 
            array (
                'id' => 3,
                'name' => 'La Campiña',
                'description_short' => 'Leche completa en polvo',
                'description' => NULL,
                'price' => '300000.000000',
                'qty_avaliable' => 10,
                'qty_sold' => 0,
                'qty_view' => 0,
                'user_rating' => '0',
                'qty_min' => 1,
                'qty_max' => 0,
                'keyword' => NULL,
                'status' => 'A',
                'EAN' => NULL,
                'promote' => 0,
                'discount' => '0.000000',
                'photo' => 'products\\February2020\\Fqpqq0tD9aU7R9ZX8st9.jpg',
                'stores_id' => 1,
                'brands_id' => NULL,
                'created_at' => '2020-01-29 17:02:15',
                'updated_at' => '2020-02-21 20:15:17',
            ),
        ));
        
        
    }
}