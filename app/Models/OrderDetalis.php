<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetalis extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $timestamp = false;

    function product()
    {
        return $this->belongsTo("App\Models\Products", "product_id");
    }
}
