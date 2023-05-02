<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;
use App\Models\OrderItem;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'price',
        'discount'
    ];

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
