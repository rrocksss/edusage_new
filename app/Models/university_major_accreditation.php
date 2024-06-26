<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class university_major_accreditation extends Model
{
    protected $table = 'university_major_accreditations';

    public function major()
    {
       return $this->belongsTo(major::class);
    }
    public function university()
    {
       return $this->belongsTo(university::class);
    }
}
