<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'media', 'facebook', 'instagram', 'twitter', 'youtube', 'first_name', 'last_name', 'date_of_birth', 'address', 'country', 'city', 'mobile', 'email', 'expertise', 'rating', 'description',
    ];
}
