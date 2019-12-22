<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'type', 'title', 'desc', 'link', 'content'
    ];
}
