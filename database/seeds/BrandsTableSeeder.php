<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nestle',
                'status' => 'A',
                'created_at' => NULL,
                'updated_at' => '2020-01-24 16:08:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Empresas Polar',
                'status' => 'A',
                'created_at' => '2020-01-24 16:08:35',
                'updated_at' => '2020-01-24 16:08:35',
            ),
        ));
        
        
    }
}