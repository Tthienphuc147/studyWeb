<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    protected $table="lophoc";
    public $timestamps=false;
    protected $fillable=['tenlophoc','anh'];
}
