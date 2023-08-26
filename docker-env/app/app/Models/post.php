<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
}
class Post extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}