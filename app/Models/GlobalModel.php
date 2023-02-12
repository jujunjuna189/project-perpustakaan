<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalModel extends Model
{
    use HasFactory;

    public static function getLevel($id)
    {
        $level = '';
        if($id === 1){
            $level = 'Administrator';
        }else{
            $level = 'Anggota';
        }

        return $level;
    }
}
