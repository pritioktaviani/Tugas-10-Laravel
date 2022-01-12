<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    
    protected $table = 'friends';
    protected $guarded = ['id'];
    use HasFactory;
    public function groups(){
        return $this->belongTo('App\Models\Groups');

    }
}