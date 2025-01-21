<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCart extends Model
{
    use HasFactory;

    protected  $table = "user_carts";

    protected $fillable = ["cardNumber", "cardHolederName", "expiration", "user_id", "method_id"];
}
