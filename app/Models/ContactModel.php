<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'fname','lname','number','city','email','message'
    ];

    protected $table = "contactus_tbl";
}
