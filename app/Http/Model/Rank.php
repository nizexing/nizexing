<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    // 关联数据 表
    protected $table = "rank";
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $guarded = [];
}
