<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddSubCategoryModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'cat_id','subcat_name'
    ];
    protected $table = 'add_subcategory_tbl';
}
