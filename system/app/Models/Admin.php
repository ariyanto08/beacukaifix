<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Support\Str;


class Admin extends Authenticatable
{
    protected $table = 'admin';
}