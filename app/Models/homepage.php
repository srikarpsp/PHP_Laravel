<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepage extends Model
{
    use HasFactory;
    protected $table = 'homepage';
    protected $fillable = ['id','img','description'];
    public $timestamps = false;
}
