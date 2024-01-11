<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','whatsapp','lineId','gitId','birthPlace','birthDate','cv','flazzCard','idCard'
    ];
}
