<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class extra extends Model
{
    public $id;

public $ItemID;
public $Price;
public $Name;
protected $hidden = ['ItemID'];

public function __construct($extra){
     $this->ItemID=$extra->ItemID;
     $this->Name=$extra->Name;
    $this->Price=$extra->Price;
 
      // die($this->Price);
    }
}