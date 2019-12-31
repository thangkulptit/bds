<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'id', 'type', 'title', 'desc', 'link', 'content'
    ];
}
