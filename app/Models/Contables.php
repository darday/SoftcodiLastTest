<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contables extends Model
{
    use HasFactory;

    protected $fillable = [
        'contable_id',
        'contable_name',
        'contable_last_name',
        'contable_cellphone',
        'contable_phone',
        'contable_email',
        'contable_password',
    ];
}
