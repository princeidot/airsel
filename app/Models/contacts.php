<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class contacts extends Model
{
    use HasFactory;

    public $fillable = ['name', 'email', 'phone', 'message'];


}
