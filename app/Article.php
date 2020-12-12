<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable=[
      'name','last_name','username','phone','email','tg_nick','theme','tg_canal','fac_canal','insta_canal'
    ];
}
