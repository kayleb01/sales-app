<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    protected $fillable = ['product_id', 'quantity', 'debtor'];
}
