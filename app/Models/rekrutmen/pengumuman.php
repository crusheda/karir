<?php

namespace App\Models\rekrutmen;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class pengumuman extends Model
{
    use HasFactory;
    protected $table = 'rekrutmen_pengumuman';
    public $timestamps = true;
    use SoftDeletes;
}
