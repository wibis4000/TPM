<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'groupName',
        'password',
        'confirmPassword',
        'campus',
        'namaKetua',
        'tempatLahir',
        'tanggalLahir',
        'gender',
        'whatsapp',
        'lineID',
        'gitID',
        'cv',
        'flazz'
    ];
}
