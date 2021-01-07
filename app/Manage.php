<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manage extends Model
{
    protected $fillable = ['email', 'username', 'password'];
    protected $table = 'admins';
}
