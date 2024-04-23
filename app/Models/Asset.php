<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asset extends Model
{
    use HasFactory;

    protected $hidden = [
        'name', 'code', 'buy', 'sell', 'logo', 'buy_min', 'buy_max', 'sell_min', 'sell_max'
    ];
}
