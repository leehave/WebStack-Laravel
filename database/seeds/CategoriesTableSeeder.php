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
                'updated_at' => '2019-01-21 13:46:19',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'order' => 3,
                'title' => '灵感采集',
                'icon' => 'fa-lightbulb-o',
                'created_at' => '2019-01-21 13:53:10',
                'updated_at' => '2019-01-21 13:53:34',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 3,
                'order' => 4,
                'title' => '发现产品',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:53:31',
                'updated_at' => '2019-01-21 13:53:34',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 3,
                'order' => 5,
                'title' => '界面灵感',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:53:49',
                'updated_at' => '2019-01-21 13:55:42',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 3,
                'order' => 6,
                'title' => '网页灵感',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:54:00',
                'updated_at' => '2019-01-21 13:55:42',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'order' => 7,
                'title' => '素材资源',
                'icon' => 'fa-thumbs-o-up',
                'created_at' => '2019-01-21 13:54:42',
                'updated_at' => '2019-01-21 13:55:42',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 7,
                'order' => 8,
                'title' => '图标素材',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:54:59',
                'updated_at' => '2019-01-21 14:12:01',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 7,
                'order' => 9,
                'title' => 'LOGO设计',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:11',
                'updated_at' => '2019-01-21 13:55:42',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 7,
                'order' => 10,
                'title' => '平面素材',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:25',
                'updated_at' => '2019-01-21 13:55:42',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 7,
                'order' => 11,
                'title' => 'UI资源',
                'icon' => 'fa-star-o',
                'created_at' => '2019-01-21 13:55:31',
                'updated_at' => '2019-01-21 13:55:42',
            ),
        ));
        
        
    }
}