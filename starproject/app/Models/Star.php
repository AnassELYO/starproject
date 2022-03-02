<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];  

    public static $validateFields = [
        'name' => 'required|string',
        'first_name' => 'required|string',
        'image' => 'required|string',
        'description' => 'required|string'
    ];
}
