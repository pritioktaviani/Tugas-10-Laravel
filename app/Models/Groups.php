<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public function friends(){
        return $this->hasMany('App\Models\Friends');
    }
}
