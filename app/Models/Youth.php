<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youth extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'town',
        'state',
        'country',
    ];
    protected $hidden = [];
    protected $casts = [];
}
