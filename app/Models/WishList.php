<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = 'wish_list';
    protected $timestamp = false;

    function product()
    {
        return $this->belongsTo(Products::class, "product_id");
    }
}
