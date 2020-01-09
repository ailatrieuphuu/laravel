<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class LuotChoi extends Model
{
    use softDeletes;
    protected $table ='luot_choi';
}
