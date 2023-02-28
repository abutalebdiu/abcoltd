<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

   public  function  authorBlog()
    {
        return $this->belongsTo(User::class,'authar_id');
    }
    public  function blogCat(){
        return $this->belongsTo(BlogCategory::class,'category_id');
    }
}
