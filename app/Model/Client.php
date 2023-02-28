<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $fillable = [
       'code','name','phone',
    ];


    public function balance()
    {
    	return $this->belongsTo(Balance::class,'code','code');
    }







}
