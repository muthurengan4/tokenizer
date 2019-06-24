<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateToken extends Model
{
    protected $table = 'createtoken';
    protected $guarded = ['id', 'email_verified', 'created_at', 'updated_at'];
}
