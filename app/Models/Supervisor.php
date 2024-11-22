<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'branch_id',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
