<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'country',
        'company_name',
        'address',
        'town_city',
        'state_county',
        'postcode_zip',
        'order_notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
