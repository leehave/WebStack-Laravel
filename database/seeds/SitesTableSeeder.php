<?php

use Illuminate\Database\Seeder;

class SitesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sites')->delete();
        
        \DB::table('sites')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'title' => 'Dribbble',
                'thumb' => 'images/247ba053249cc2c4ab0c071918f89397.png',
                'describe' => '全球UI设计师作品分享平台。',
                'url' => 'https://dribbble.com/',
                'created_at' => '2019-01-21 15:23:29',
                'updated_at' => '2019-01-21 15:23:29',
            ),
        ));
        
        
    }
}