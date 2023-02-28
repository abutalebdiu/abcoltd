<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Deposit extends Model
{
	public function user()
	{
		return $this->belongsTo(User::class,'code','code');
	}   
	
	public function client()
	{
		return $this->belongsTo(Client::class,'client_code','code');
	}    
	
	
}
