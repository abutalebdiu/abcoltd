<?php

namespace App\Model;
use Illuminate\Foundation\Auth\User;
use App\Model\IPO;
use Illuminate\Database\Eloquent\Model;

class ApplyIpo extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function ipo()
    {
        return $this->belongsTo(IPO::class,'ipo_id');
    }
}
