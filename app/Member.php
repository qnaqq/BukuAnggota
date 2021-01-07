<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['nama','nim','fakultas','prodi','angkatan','lulusan','sejak','alasan'];
}
