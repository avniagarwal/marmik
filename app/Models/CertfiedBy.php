<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertfiedBy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'photo', 'status'];
}
