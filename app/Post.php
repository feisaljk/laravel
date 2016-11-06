<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table yang akan digunakan
    public $table = 'Post';
    
    public function user()
    {
        return $this->belongsTo('App\Users', 'users_id');
    }
}
