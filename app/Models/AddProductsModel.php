<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AddProductsModel extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'cat_id',
        'subcat_id',
        'pro_name',
        'pro_image',
        'pro_details',
        'pro_oldprice',
        'pro_newprice',
        'pro_qty',
    ];
    protected $table='add_products_tbl';
}
