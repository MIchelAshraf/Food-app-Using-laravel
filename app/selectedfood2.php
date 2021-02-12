<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class selectedfood2 extends Model
{
    protected $fillable = ['quantity'];
protected $hidden = ['id','order_id','item_id'];
protected $table="selectedfoods";
}
