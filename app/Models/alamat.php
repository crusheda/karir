<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class alamat extends Model
{
    use HasFactory;
    protected $table = 'alamat';
    public $timestamps = true;
    use SoftDeletes;
}
