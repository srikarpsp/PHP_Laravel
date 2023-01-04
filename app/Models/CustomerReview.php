<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReview extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Email',
        'Contact',
        'Liked_Food',
        'Satisfaction',
        'Recommend',
        'SiteRating',
        'Comments'
    ];
}
