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
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'title' => '常用推荐',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 12:48:58',
                'updated_at' => '2019-01-21 12:52:02',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'order' => 2,
                'title' => '社区资讯',
                'icon' => 'fa-bullhorn',
                'created_at' => '2019-01-21 12:50:17',
                'updated_at' => '2019-01-21 12:50:26',
            ),
        ));
        
        
    }
}