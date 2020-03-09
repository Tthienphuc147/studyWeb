<?php

namespace App;


class ModelPublic
{
    public static function checkRoleAdmin(){
        return request()->session()->has('id') && request()->session()->get('role')==2;
    }
    public static function checkRoleTeacher(){
        return request()->session()->has('id') && request()->session()->get('role')==3;
    }
}
