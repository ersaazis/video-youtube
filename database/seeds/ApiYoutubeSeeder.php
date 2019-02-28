<?php

use Illuminate\Database\Seeder;
use App\YoutubeApi;

class ApiYoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        YoutubeApi::create(['key'=>'YoutubeApi','api'=>'Input Api Here']);
    }
}
