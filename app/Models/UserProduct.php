<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_picture_offer',
        'user_offer_name',
        'user_desc_offer',
        'user_price_per_offer',
        'user_number_shares_offer',
        'user_end_date_offer',
        'user_picture_or_file_offer',
    ];
}
