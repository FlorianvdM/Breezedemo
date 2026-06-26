<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllergeenModel extends Model
{
    protected $table = 'Allergeen';

    public function sp_GetAllAllergenen()
    {
        return DB::select('CALL SP_GetALLAllergenen()');
    }
}