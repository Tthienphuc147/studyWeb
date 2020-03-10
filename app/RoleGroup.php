<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleGroup extends Model
{
    protected $table="phanquyen";
    public $timestamps=false;
    protected $fillable=['phanquyen'];
}
