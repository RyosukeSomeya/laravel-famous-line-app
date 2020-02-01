<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    public function lines()
    {
        return $this->hasMany('App\SlamdunkLine');
    }
}
