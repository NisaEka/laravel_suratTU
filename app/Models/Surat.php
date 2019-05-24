<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    public $table = "surats";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'mhs_id',
		'jenissurat',
		'detail',
        'user_id',
        'hasread',
        'status',
        'lampiran'

    ];

    public static $rules = [
        // create rules
    ];

    // Surat 
}
