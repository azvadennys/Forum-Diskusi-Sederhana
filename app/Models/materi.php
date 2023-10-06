<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $guarded = [];
    use HasFactory;
    protected $with = ['diskusi'];

    public function diskusi()
    {
        return $this->hasMany(diskusi::class);
    }
}
