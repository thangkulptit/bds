<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'inbox';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status', 'fullname', 'address', 'phone', 'email', 'content'
    ];
}
