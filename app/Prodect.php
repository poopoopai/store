<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodect extends Model
{
    protected $fillable = [
        'id', 'code', 'name','price','company'
    ];
}
