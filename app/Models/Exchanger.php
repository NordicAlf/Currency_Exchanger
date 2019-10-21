<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Exchanger extends Model
{
    // relationship exchanger->user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
