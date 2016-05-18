<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $fillable = ['first_name','last_name','email','password'];
    //
}
