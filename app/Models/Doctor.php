<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Doctor extends Model
{
    use HasFactory, EncryptedAttribute;

    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
        'specialization',
        'image',
        'fee',
        'salary',
    ];


    protected $encryptable = [
        'salary'
    ];


}
