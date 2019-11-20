<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('news')->delete();

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/1.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/2.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/3.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/4.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/5.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/6.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/7.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/8.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/9.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/10.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/11.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/12.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/13.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/14.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/15.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/16.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/1.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/2.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/3.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/4.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/5.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/6.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/7.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/8.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/9.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/10.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/11.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/12.jpg'
      ));

      News::create(array(
        'cover_photo'=> 'photos/shares/news_upload/13.jpg'
      ));

    }
}
