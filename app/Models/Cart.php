<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $timestamp = false;

    function product()
    {
        return $this->belongsTo(Products::class, "product_id");
    }
}
