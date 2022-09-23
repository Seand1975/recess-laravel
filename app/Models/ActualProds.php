<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualProds extends Model
{
    protected $table = 'products';
    protected $fillable=[
        'product_name',
        'product_description',
        'available_quantity',
        'rate_per_item',
        'posted_by'
    ];
}
