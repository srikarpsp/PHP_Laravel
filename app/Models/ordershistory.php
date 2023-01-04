<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordershistory extends Model
{
    use HasFactory;
    protected $table = 'confirmorders';
    protected $fillable = [
        'title',
        'description',
        'cost',
        'spice',
        'size',
        'instructions'
    ];
}
