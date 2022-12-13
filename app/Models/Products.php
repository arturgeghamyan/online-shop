<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPhoto;

class Products extends Model
{
    protected $table = "products";
    protected $timestamp = false;

    function photo()
    {
        return $this->hasMany(ProductPhoto::class, "product_id");
    }
}
