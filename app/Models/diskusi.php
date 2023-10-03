<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diskusi extends Model
{
    protected $guarded = [];
    use HasFactory;
    protected $with = ['balasan'];
    
    public function balasan()
    {
        return $this->hasMany(balasan::class);
    }
}
