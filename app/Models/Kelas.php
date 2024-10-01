<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $primarykey = 'kode_kelas';

    protected $guarded = [];

    public $incrementing = false;
}
