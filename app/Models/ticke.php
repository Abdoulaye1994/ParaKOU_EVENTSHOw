<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticke extends Model
{
    use HasFactory;
    protected $fillable = [
        'form_name',
        'email',
        'phone',
        'TicketForm',
        'Form',
        'number',
        'message'
    ];
}
