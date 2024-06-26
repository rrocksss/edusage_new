<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class region extends Model
{
    protected $table = 'regions';
    protected $primaryKey = 'code';

    public function universities()
    {
       return $this->hasMany(university::class);
    }
}
