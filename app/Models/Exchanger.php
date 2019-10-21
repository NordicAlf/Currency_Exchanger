<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Exchanger extends Model
{
    protected $fillable = [
        'user_id',
        'currency_in',
        'money_in',
        'currency_out',
        'money_out',
    ];

    // relationship exchanger->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
