<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $table = 'doctors';
    protected $fillable =
        [
            'type_id',
            'full_name',
            'image',
            'exp',
        ];
}
