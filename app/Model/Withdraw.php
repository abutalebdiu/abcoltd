<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Withdraw extends Model
{
     public function user()
	{
		return $this->belongsTo(User::class,'code','code');
	}   
}
