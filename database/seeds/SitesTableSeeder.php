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
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'title' => 'Behance',
                'thumb' => 'images/c3b59ad338e7e122072b867381e4b599.png',
                'describe' => 'Adobe旗下的设计师交流平台，来自世界各地的设计师在这里分享自己的作品。',
                'url' => 'https://behance.net/',
                'created_at' => '2019-01-22 01:11:24',
                'updated_at' => '2019-01-22 01:11:24',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'title' => 'UI中国',
                'thumb' => 'images/9458ececbfeea651b5e871179f245ce5.png',
                'describe' => '图形交互与界面设计交流、作品展示、学习平台。',
                'url' => 'http://www.ui.cn/',
                'created_at' => '2019-01-22 01:13:10',
                'updated_at' => '2019-01-22 01:13:10',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'title' => '站酷',
                'thumb' => 'images/c2aa8b63006d36a026e419bf3e0d7e50.png',
                'describe' => '中国人气设计师互动平台。',
                'url' => 'http://www.zcool.com.cn/',
                'created_at' => '2019-01-22 01:14:04',
                'updated_at' => '2019-01-22 01:14:04',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'title' => 'Pinterest',
                'thumb' => 'images/4b8c9c66df25d3867961ebbd6a824eea.png',
                'describe' => '全球美图收藏采集站。',
                'url' => 'https://www.pinterest.com/',
                'created_at' => '2019-01-22 01:14:51',
                'updated_at' => '2019-01-22 01:14:51',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'title' => '花瓣',
                'thumb' => 'images/48c7741c42e39eae508c3d9eef4e7a97.png',
                'describe' => '收集灵感,保存有用的素材。',
                'url' => 'http://huaban.com/',
                'created_at' => '2019-01-22 01:15:35',
                'updated_at' => '2019-01-22 01:15:35',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'title' => 'Medium',
                'thumb' => 'images/11b56d4a9cc9297638d46c4b67c73693.png',
                'describe' => '高质量设计文章。',
                'url' => 'https://medium.com/',
                'created_at' => '2019-01-22 01:16:14',
                'updated_at' => '2019-01-22 01:16:14',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'title' => '优设',
                'thumb' => 'images/636342035cdd2fbc08097d012b5e5fad.png',
                'describe' => '设计师交流学习平台。',
                'url' => 'http://www.uisdc.com/',
                'created_at' => '2019-01-22 01:17:07',
                'updated_at' => '2019-01-22 01:17:07',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'title' => 'Producthunt',
                'thumb' => 'images/8bdf511e23b183f9aac30aee3368152b.png',
                'describe' => '发现新鲜有趣的产品。',
                'url' => 'https://www.producthunt.com/',
                'created_at' => '2019-01-22 01:17:50',
                'updated_at' => '2019-01-22 01:17:50',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'title' => 'Youtube',
                'thumb' => 'images/15b4f46186f718e92b97f6f282f140fd.png',
                'describe' => '全球最大的学习分享平台。',
                'url' => 'https://www.youtube.com/',
                'created_at' => '2019-01-22 01:18:31',
                'updated_at' => '2019-01-22 01:18:31',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'title' => 'Google',
                'thumb' => 'images/643faef109965a9cedcf9cde74d0adb1.png',
                'describe' => '全球最大的搜索平台。',
                'url' => 'https://www.google.com/',
                'created_at' => '2019-01-22 01:19:35',
                'updated_at' => '2019-01-22 01:19:35',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 2,
                'title' => '雷锋网',
                'thumb' => 'images/57ab570b631cc25a23390f507d496bc6.png',
                'describe' => '人工智能和智能硬件领域的互联网科技媒体。',
                'url' => 'https://www.leiphone.com/',
                'created_at' => '2019-01-22 01:21:05',
                'updated_at' => '2019-01-22 01:21:05',
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 2,
                'title' => '36kr',
                'thumb' => 'images/adef44c84185d959446024452ad615cc.png',
                'describe' => '创业资讯、科技新闻。',
                'url' => 'http://36kr.com/',
                'created_at' => '2019-01-22 01:21:52',
                'updated_at' => '2019-01-22 01:21:52',
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 2,
                'title' => '数英网',
                'thumb' => 'images/cee8fd836f98652f52fcc6046ba9db89.png',
                'describe' => '数字媒体及职业招聘网站。',
                'url' => 'https://www.digitaling.com/',
                'created_at' => '2019-01-22 01:23:15',
                'updated_at' => '2019-01-22 01:23:15',
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 2,
                'title' => '猎云网',
                'thumb' => 'images/f9b1cfa239abdda5ee2dca7c04ca2d73.png',
                'describe' => '互联网创业项目推荐和创业创新资讯。',
                'url' => 'http://www.lieyunwang.com/',
                'created_at' => '2019-01-22 01:24:21',
                'updated_at' => '2019-01-22 01:24:21',
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 2,
                'title' => '人人都是产品经理',
                'thumb' => 'images/fe7dcb7b5937c3bcf6043ba7d9379fbe.png',
                'describe' => '产品经理、产品爱好者学习交流平台。',
                'url' => 'http://www.woshipm.com/',
                'created_at' => '2019-01-22 01:25:07',
                'updated_at' => '2019-01-22 01:25:07',
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 2,
                'title' => '互联网早读课',
                'thumb' => 'images/ecd5eefc4ec4bac49916a91c2da44412.png',
                'describe' => '互联网行业深度阅读与学习平台。',
                'url' => 'https://www.zaodula.com/',
                'created_at' => '2019-01-22 01:25:41',
                'updated_at' => '2019-01-22 01:25:41',
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 2,
                'title' => '产品壹佰',
                'thumb' => 'images/2f4235fb1eb75822a44903d9894760d7.png',
                'describe' => '为产品经理爱好者提供最优质的产品资讯、原创内容和相关视频课程。',
                'url' => 'http://www.chanpin100.com/',
                'created_at' => '2019-01-22 01:26:27',
                'updated_at' => '2019-01-22 01:26:27',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 2,
                'title' => 'PMCAFF',
                'thumb' => 'images/a76e60c2d42f5bbdacbf7dd120810194.png',
                'describe' => '中国第一产品经理人气组织，专注于研究互联网产品。',
                'url' => 'http://www.pmcaff.com/',
                'created_at' => '2019-01-22 01:27:08',
                'updated_at' => '2019-01-22 01:27:08',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 2,
                'title' => '爱运营',
                'thumb' => 'images/f84a9e00d63b007ea09df75dbdaf9549.png',
                'describe' => '网站运营人员学习交流，专注于网站产品运营管理、淘宝运营。',
                'url' => 'http://www.iyunying.org/',
                'created_at' => '2019-01-22 01:28:09',
                'updated_at' => '2019-01-22 01:28:09',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 2,
                'title' => '鸟哥笔记',
                'thumb' => 'images/e424308a81c187bc42e95addf462b4c8.png',
                'describe' => '移动互联网第一干货平台。',
                'url' => 'http://www.niaogebiji.com/',
                'created_at' => '2019-01-22 01:29:56',
                'updated_at' => '2019-01-22 01:29:56',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 2,
                'title' => '古田路9号',
                'thumb' => 'images/e22a54099a69f7e76c471d7f6a253fe8.png',
                'describe' => '国内专业品牌创意平台。',
                'url' => 'http://www.gtn9.com/',
                'created_at' => '2019-01-22 01:30:29',
                'updated_at' => '2019-01-22 01:30:29',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 2,
                'title' => '优阁网',
                'thumb' => 'images/74a25f510e403f4ef28212146510dfa7.png',
                'describe' => 'UI设计师学习交流社区。',
                'url' => 'http://www.uigreat.com/',
                'created_at' => '2019-01-22 01:32:17',
                'updated_at' => '2019-01-22 01:32:17',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 4,
                'title' => 'Producthunt',
                'thumb' => 'images/a1cc88fa0a3bf74349ba9c08a67abdc7.png',
                'describe' => '发现新鲜有趣的产品。',
                'url' => 'https://www.producthunt.com/',
                'created_at' => '2019-01-22 01:33:37',
                'updated_at' => '2019-01-22 01:33:37',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 4,
                'title' => 'NEXT',
                'thumb' => 'images/0e2b6c9a5afd4f83d2e22632b08f56ef.png',
                'describe' => '不错过任何一个新产品。',
                'url' => 'http://next.36kr.com/posts',
                'created_at' => '2019-01-22 01:34:41',
                'updated_at' => '2019-01-22 01:34:41',
            ),
            25 => 
            array (
                'id' => 26,
                'category_id' => 4,
                'title' => '少数派',
                'thumb' => 'images/2d01ac82bb496b607c43e7b2b29cd069.png',
                'describe' => '高品质数字消费指南。',
                'url' => 'https://sspai.com/',
                'created_at' => '2019-01-22 01:36:08',
                'updated_at' => '2019-01-22 01:36:08',
            ),
            26 => 
            array (
                'id' => 27,
                'category_id' => 4,
                'title' => '利器',
                'thumb' => 'images/98e2ee62a90b6243630f4aa479b4b47b.png',
                'describe' => '创造者和他们的工具。',
                'url' => 'http://liqi.io/',
                'created_at' => '2019-01-22 01:36:53',
                'updated_at' => '2019-01-22 01:36:53',
            ),
            27 => 
            array (
                'id' => 28,
                'category_id' => 4,
                'title' => 'Today',
                'thumb' => 'images/1726189292537c3a2733ebc673b7f1d6.png',
                'describe' => '为身边的新产品喝彩。',
                'url' => 'http://today.itjuzi.com/',
                'created_at' => '2019-01-22 01:37:37',
                'updated_at' => '2019-01-22 01:37:37',
            ),
            28 => 
            array (
                'id' => 29,
                'category_id' => 4,
                'title' => '小众软件',
                'thumb' => 'images/76b49053ce87ab3c7419c7cdf6fa4f07.png',
                'describe' => '在这里发现更多有趣的应用。',
                'url' => 'https://faxian.appinn.com',
                'created_at' => '2019-01-22 01:38:04',
                'updated_at' => '2019-01-22 01:38:04',
            ),
            29 => 
            array (
                'id' => 30,
                'category_id' => 5,
                'title' => 'Pttrns',
                'thumb' => 'images/1c759dc53774e5758a31fee0401e213a.png',
                'describe' => 'Check out the finest collection of design patterns, resources, mobile apps and inspiration',
                'url' => 'https://www.pttrns.com/',
                'created_at' => '2019-01-22 01:39:09',
                'updated_at' => '2019-01-22 01:39:09',
            ),
            30 => 
            array (
                'id' => 31,
                'category_id' => 5,
                'title' => 'Collect UI',
                'thumb' => 'images/7e802c77c7bb6c85c1e2bb608a4a13cd.png',
                'describe' => 'Daily inspiration collected from daily ui archive and beyond.',
                'url' => 'http://collectui.com/',
                'created_at' => '2019-01-22 01:39:58',
                'updated_at' => '2019-01-22 01:39:58',
            ),
            31 => 
            array (
                'id' => 32,
                'category_id' => 5,
                'title' => 'UI uigreat',
                'thumb' => 'images/d140fe4bd548f273ddd00f35e1ad5ff5.png',
                'describe' => 'APP界面截图参考。',
                'url' => 'http://ui.uigreat.com/',
                'created_at' => '2019-01-22 01:40:40',
                'updated_at' => '2019-01-22 01:40:40',
            ),
            32 => 
            array (
                'id' => 33,
                'category_id' => 5,
                'title' => 'Android Niceties',
                'thumb' => 'images/8b6e0af7df3a5d77a14e41a0f5f36dc5.png',
                'describe' => 'A collection of screenshots encompassing some of the most beautiful looking Android apps.',
                'url' => 'http://androidniceties.tumblr.com/',
                'created_at' => '2019-01-22 01:41:21',
                'updated_at' => '2019-01-22 01:41:21',
            ),
            33 => 
            array (
                'id' => 34,
                'category_id' => 6,
                'title' => 'Awwwards',
                'thumb' => 'images/bdd6c88417790c97de2c2d0643cc602c.png',
                'describe' => 'Awwwards are the Website Awards that recognize and promote the talent and effort of the best developers, designers and web agencies in the world.',
                'url' => 'https://www.awwwards.com/',
                'created_at' => '2019-01-22 01:44:09',
                'updated_at' => '2019-01-22 01:51:33',
            ),
            34 => 
            array (
                'id' => 35,
                'category_id' => 6,
                'title' => 'CSS Design Awards',
                'thumb' => 'images/481219fe4285f1f4ec1311acce7deb06.png',
                'describe' => 'Website Awards & Inspiration - CSS Gallery',
                'url' => 'https://www.cssdesignawards.com/',
                'created_at' => '2019-01-22 01:44:45',
                'updated_at' => '2019-01-22 01:51:41',
            ),
            35 => 
            array (
                'id' => 36,
                'category_id' => 6,
                'title' => 'The FWA',
                'thumb' => 'images/8fe5280ff7dc3012fb88781dd9ff4b93.png',
                'describe' => 'FWA - showcasing innovation every day since 2000',
                'url' => 'https://thefwa.com/',
                'created_at' => '2019-01-22 01:45:19',
                'updated_at' => '2019-01-22 01:51:48',
            ),
            36 => 
            array (
                'id' => 37,
                'category_id' => 6,
                'title' => 'Ecommercefolio',
                'thumb' => 'images/950d52c71e28f1c9ed964732d6ed18fd.png',
                'describe' => 'Only the Best Ecommerce Design Inspiration.',
                'url' => 'http://www.ecommercefolio.com/',
                'created_at' => '2019-01-22 01:50:41',
                'updated_at' => '2019-01-22 01:50:41',
            ),
            37 => 
            array (
                'id' => 38,
                'category_id' => 6,
                'title' => 'Lapa',
                'thumb' => 'images/1824678ec13d01b76df47fc5975178fa.png',
                'describe' => 'The best landing page design inspiration from around the web.',
                'url' => 'http://www.lapa.ninja/',
                'created_at' => '2019-01-22 01:51:15',
                'updated_at' => '2019-01-22 01:51:15',
            ),
            38 => 
            array (
                'id' => 39,
                'category_id' => 6,
                'title' => 'Reeoo',
                'thumb' => 'images/5205b768b9b640bfada244ce9d15318d.png',
                'describe' => 'web design inspiration and website gallery.',
                'url' => 'http://reeoo.com/',
                'created_at' => '2019-01-22 01:52:43',
                'updated_at' => '2019-01-22 01:52:43',
            ),
            39 => 
            array (
                'id' => 40,
                'category_id' => 6,
                'title' => 'Designmunk',
                'thumb' => 'images/31de409b71235b76d605e98293d68cb3.png',
                'describe' => 'Best Homepage Design Inspiration.',
                'url' => 'https://designmunk.com/',
                'created_at' => '2019-01-22 01:53:28',
                'updated_at' => '2019-01-22 01:53:28',
            ),
            40 => 
            array (
                'id' => 41,
                'category_id' => 6,
                'title' => 'Best Websites Gallery',
                'thumb' => 'images/862823249aa701d8bc8af16ae98f1e3a.png',
                'describe' => 'Website Showcase Inspiration | Best Websites Gallery.',
                'url' => 'https://bestwebsite.gallery/',
                'created_at' => '2019-01-22 01:57:32',
                'updated_at' => '2019-01-22 01:57:32',
            ),
            41 => 
            array (
                'id' => 42,
                'category_id' => 6,
                'title' => 'Pages',
                'thumb' => 'images/90fd20bd3e7ae7c7fe37ea689dcca32c.png',
                'describe' => 'Curated directory of the best Pages.',
                'url' => 'http://www.pages.xyz/',
                'created_at' => '2019-01-22 01:58:07',
                'updated_at' => '2019-01-22 01:58:07',
            ),
            42 => 
            array (
                'id' => 43,
                'category_id' => 6,
                'title' => 'SiteSee',
                'thumb' => 'images/da24d08a597456be98191b4a08eff4d6.png',
                'describe' => 'SiteSee is a curated gallery of beautiful, modern websites collections.',
                'url' => 'https://sitesee.co/',
                'created_at' => '2019-01-22 01:58:42',
                'updated_at' => '2019-01-22 01:58:42',
            ),
            43 => 
            array (
                'id' => 44,
                'category_id' => 6,
                'title' => 'Site Inspire',
                'thumb' => 'images/c15c9017ad6874faae0df64bd969115b.png',
                'describe' => 'A CSS gallery and showcase of the best web design inspiration.',
                'url' => 'https://www.siteinspire.com/',
                'created_at' => '2019-01-22 01:59:13',
                'updated_at' => '2019-01-22 01:59:13',
            ),
            44 => 
            array (
                'id' => 45,
                'category_id' => 6,
                'title' => 'WebInspiration',
                'thumb' => 'images/f8fe63594e2083755086ee294b036108.png',
                'describe' => '网页设计欣赏,全球顶级网页设计。',
                'url' => 'http://web.uedna.com/',
                'created_at' => '2019-01-22 01:59:54',
                'updated_at' => '2019-01-22 01:59:54',
            ),
            45 => 
            array (
                'id' => 46,
                'category_id' => 6,
                'title' => 'navnav',
                'thumb' => 'images/86b9e596068f2a71d2a2444733a4094e.png',
                'describe' => 'A ton of CSS, jQuery, and JavaScript responsive navigation examples, demos, and tutorials from all over the web.',
                'url' => 'http://navnav.co/',
                'created_at' => '2019-01-22 02:00:24',
                'updated_at' => '2019-01-22 02:00:24',
            ),
            46 => 
            array (
                'id' => 47,
                'category_id' => 6,
                'title' => 'Really Good UX',
                'thumb' => 'images/948b0f5b62e59ef0a97edf4b9a51c404.png',
                'describe' => 'A library of screenshots and examples of really good UX. Brought to you by .',
                'url' => 'https://www.reallygoodux.io/',
                'created_at' => '2019-01-22 02:01:05',
                'updated_at' => '2019-01-22 02:01:05',
            ),
        ));
        
        
    }
}