<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_product';
    protected $fillable = [
        'name_product',
        'desc_product',
        'price_product',
        'id_type'
    ];
}
