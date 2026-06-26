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

    public function sp_CreateAllergeen($name, $description)
    {
    $row = DB::selectOne(
        'CALL sp_CreateAllergeen(:name, :description)',
        [
            'name'        => $name,
            'description' => $description
        ]
    );
    return $row->new_id;
    }
}