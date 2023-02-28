<?php

namespace App\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class ChildIpo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    
    public function balance()
    {
        return $this->belongsTo(Balance::class,'client_code','code');
    }
}
