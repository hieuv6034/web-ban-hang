<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'p_id';
    protected $fillable = ['p_id', 'p_name', 'p_slug', 'p_warranty', 'p_accessories', 'p_condition', 'p_price', 'p_promotion', 'p_status', 'p_view', 'p_active', 'p_hot', 'p_description', 'p_image', 'prod_cate'];
}
