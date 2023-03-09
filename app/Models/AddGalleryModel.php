<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class AddGalleryModel extends Model
{
    use HasFactory,Notifiable;
    public $timestamps=false;
    protected $fillable = [
        'galleryname','uploadimage'
    ];


    protected $table = 'addgallery_tbl';
}
