<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTriVien extends Authenticatable
{
    use softDeletes;
    protected $table ='quan_tri_vien';
    
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
}