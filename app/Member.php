<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{    
    public $timestamps = false;
    public $primaryKey = 'mid';
    public $incrementing = false; 
    
}
