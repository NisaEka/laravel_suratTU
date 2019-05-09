<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public $table = "jurusans";

    public $primaryKey = "id";

    public $timestamps = true;

    public $fillable = [
		'id',
		'name',

    ];

    public static $rules = [
        // create rules
    ];

    // Jurusan 
}
