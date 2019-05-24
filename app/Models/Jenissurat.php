<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenissurat extends Model
{
    public $table = "jenissurats";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',
        'detail',
        'format'

    ];

    public static $rules = [
        // create rules
    ];

    // Jenissurat 
}
