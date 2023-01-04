<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PaymentPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'FullName',
        'Email',
        'Address',
        'City',
        'State',
        'Zip',
        'NameOnCard',
        'CreditCardNumber',
        'ExpMonth',
        'ExpYear',
        'CVV'
    ];
}
