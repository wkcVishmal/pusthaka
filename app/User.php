<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    public $timestamps = false;
    protected $table = 'users';

    public function member(){
        return $this->hasOne('App\Member');
    }
}
