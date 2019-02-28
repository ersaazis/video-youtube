<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoutubeApi extends Model
{
	protected $table = 'youtube_api';
    protected $fillable = [
        'key','api'
    ];
}
