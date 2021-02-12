<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class selectedextra extends Model
{
    public $id;
public $OrderID;
public $extraID;
public $price;

protected $hidden = ['OrderID','extraID'];
public function __construct($extra){

    $this->extraID=$extra->id;
    $this->price=$extra->Price;
    $this->OrderID=$extra->id;
   
        
      // die($this->Price);
    }
}
