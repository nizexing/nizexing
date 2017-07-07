<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = "user";
    protected $primaryKey = "uid";
    public $timestamps = false;
    public $guarded = [];


    public function detail()
    {
        return $this -> hasOne('App\Http\Model\User_detail',"uid","uid");
    }

}
