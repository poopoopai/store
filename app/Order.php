<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
         'code', 'count','user_id'
    ];

    public function prodect()
    {
        return $this->hasOne('App\Prodect' , 'code','code');
    }
}
