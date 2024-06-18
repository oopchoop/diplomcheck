<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;

    protected $table = 'times';
    protected $fillable =
        [
            'time'
        ];
}
