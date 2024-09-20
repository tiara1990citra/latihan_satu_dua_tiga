<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable =[];
    protected $guarded =[];
    protected $primarykey ='nisn';
    public $incrementing =false;
}
