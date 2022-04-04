<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rick extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'gender',
        'status',
        'image',
    ];
}
