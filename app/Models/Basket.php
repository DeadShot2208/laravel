<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $table = 'baskets';

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
