<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
     protected $fillable =['restaurant_name','Description','Telephone','Email','country','street_1','street_2','city_booking','state_booking','postal_code',];
         protected $hidden = ['id','adminID'];
}
