<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture_offer',
        'offer_name',
        'desc_offer',
        'price_per_offer',
        'number_shares_offer',
        'end_date_offer',
        'picture_or_file_offer',
    ];
}
