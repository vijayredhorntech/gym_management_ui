<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
      'name', 'file', 'plan', 'initial_fee', 'personal',  'email', 'mobile', 'address', 'country', 'city', 'date_of_birth', 'gender', 'weight', 'height',
    ];

    public function memberships(){
        return $this->hasMany(Membership::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }


}
