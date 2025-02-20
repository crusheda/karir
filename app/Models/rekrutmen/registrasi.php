<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class registrasi extends Model
{
    use HasFactory;
    protected $table = 'rekrutmen_registrasi';
    public $timestamps = true;
    use SoftDeletes;
}
