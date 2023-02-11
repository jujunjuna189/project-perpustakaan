<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoleksiModel extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    protected $guarded = [];
}
