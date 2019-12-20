<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_id', 'title_h1', 'desc', 'bgr', 'content', 'images1', 'text1', 'images2', 'text2', 'images3', 'text3', 'images4', 'text4', 'images5', 'text5', 'hot_news'
    ];
}
