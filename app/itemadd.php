<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemadd extends Model
{
    protected $fillable = ['id','CategoryID','Name', 'Description','Price','Photo'];
protected $hidden =['id','CategoryID'];
protected $table="items";
}
