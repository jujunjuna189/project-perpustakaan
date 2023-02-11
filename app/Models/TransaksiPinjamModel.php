<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiPinjamModel extends Model
{
    use HasFactory;
    protected $table = 'trs_pinjam';
    protected $guarded = [];
}
