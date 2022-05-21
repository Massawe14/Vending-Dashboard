<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vending extends Model
{
    use HasFactory;

    protected $table = 'vendings';
    
    protected $fillable = [
        'vending_id',
        'name',
        'location',
    ];
}
