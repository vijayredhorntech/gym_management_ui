<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id', 'start_date', 'end_date', 'type', 'status',
    ];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
