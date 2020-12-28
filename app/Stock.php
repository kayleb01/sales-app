<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['description', 'sellingPrice', 'costPrice', 'quantity'];
  //  protected $table = 'stocks';
}
