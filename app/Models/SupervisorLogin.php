<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SupervisorLogin extends Model
{
    protected $table = 'supervisor_logins';

    protected $fillable = ['name', 'email', 'password', 'mobile'];
}
