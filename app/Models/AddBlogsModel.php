<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddBlogsModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'blogtitle','addblog','blogdate','blogimage'
    ];

    protected $table = 'addblogs_tbl';
}
