<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $table = 'records';

    protected $fillable =
        [
            'user_id',
            'doctor_id',
            'date'
        ];
}
