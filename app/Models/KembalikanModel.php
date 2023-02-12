<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KembalikanModel extends Model
{
    use HasFactory;
    protected $table = 'trs_kembali';
    protected $guarded = [];
}
