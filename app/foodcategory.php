<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foodcategory extends Model
{
    protected $table="foodcategory";
    protected $fillable =['Name','Description'];
         protected $hidden = ['id'];
 
}
