<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country',
        'company_name',
        'address',
        'town_city',
        'state_county',
        'postcode_zip'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
