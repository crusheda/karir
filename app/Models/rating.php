<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = 'rating';
    public $timestamps = true;

    protected $fillable = [
        'rating',
        'ip'
    ];
}
