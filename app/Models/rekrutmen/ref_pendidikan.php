<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ref_pendidikan extends Model
{
    use HasFactory;
    protected $table = 'referensi_jenjang_pendidikan';
    public $timestamps = true;
    use SoftDeletes;
}
