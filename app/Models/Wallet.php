<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\User;


class Wallet extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
