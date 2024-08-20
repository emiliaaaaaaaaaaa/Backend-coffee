<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menumodel extends Model
{
    protected $table = 'food';
    protected $primarykey = 'id';
    public $timestamps = false;
    public $fillable = [
        'name', 'spicy_level', 'price', 'image','createdAt', 'updateAt'
    ];
}
