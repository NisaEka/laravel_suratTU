<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    public $table = "pejabats";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
		'jabatan',
		'nip',

    ];

    public static $rules = [
        // create rules
    ];

    // Pejabat 
}
