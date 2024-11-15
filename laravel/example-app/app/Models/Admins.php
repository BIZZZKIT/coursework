<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $table = 'admins';

    protected $fillable = ['login', 'password'];

    use HasFactory;
}
