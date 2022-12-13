<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $timestamp = false;

    function order_detalis()
    {
        return $this->hasMany('App\Models\OrderDetalis', 'product_id');
    }
}
