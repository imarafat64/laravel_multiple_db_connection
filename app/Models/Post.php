<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $connection = 'mysql_2';

    protected $fillable = [
        'title', 
        'body',
    ];
}
