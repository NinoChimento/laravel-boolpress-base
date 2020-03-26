<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['user_id',"img","description","title"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
