<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   protected $fillable = ['stock_id', 'quantity'];
    // protected $dateFormat = 'U';

   // Relationships
   public function stock()
   {
   	return $this->belongsTo(Stock::class);
   }
}
