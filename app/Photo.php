<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Photo extends Model
{
    protected $fillable = ['user_id',"img","description"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
