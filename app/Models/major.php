<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class major extends Model
{
    protected $table = 'majors';

    public function university_major_accreditations()
    {
       return $this->hasMany(university_major_accreditation::class);
    }
}
