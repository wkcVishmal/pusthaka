<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';

    public $timestamps = false;
    public $incrementing = false;

    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
