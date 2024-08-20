<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminmodel extends Model
{
    protected $table = 'food';
    protected $primarykey = 'id';
    public $timestamps = false;
    public $fillable = [
        'name', '', 'password', 'createdAt', 'updateAt'
    ];
}
