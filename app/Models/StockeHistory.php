<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockeHistory extends Model
{
    use HasFactory;
    protected $fillable = ['stock_id', 'user_id', 'comment'];
}
