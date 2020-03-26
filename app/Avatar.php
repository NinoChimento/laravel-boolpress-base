<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = ["user_id","img"];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
