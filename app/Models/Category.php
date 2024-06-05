<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use HasFactory;
	
    protected $table = 'categories';
    protected $primaryKey = 'c_id';
    protected $fillable = ['c_id', 'c_name', 'c_slug', 'c_icon', 'c_active', 'c_total_product'];


    protected $status = [
    	1 => [
    		'name' => 'Public',
    	],
    	0 => [
    		'name' => 'Private',
    	]
    ];

    public function getStatus($value)
    {
    	return array_get($this->status, $value, '[N\A]');
    }
}
