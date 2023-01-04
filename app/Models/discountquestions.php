<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class discountquestions extends Model
{
    use HasFactory;
    protected $fillable = ['Question','OptionOne','OptionTwo','OptionThree','OptionFour','QuestionId'];
}
