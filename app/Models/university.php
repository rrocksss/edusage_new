<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class university extends Model
{
    protected $table = 'universities';

    public function region()
    {
       return $this->belongsTo(region::class);
    }

    public function university_major_accreditations()
    {
       return $this->hasMany(university_major_accreditation::class);
    }
}
