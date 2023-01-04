<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPage extends Model
{
    use HasFactory;
    protected $fillable = ['Desc_1','Desc_2','Desc_3','Desc_4','Desc_5','Desc_6','Desc_7','Desc_8'];
}
