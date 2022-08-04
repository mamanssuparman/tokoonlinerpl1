<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Category_product;

class Barang extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function category_product()
    {
        return $this->belongsTo(Category_product::class,'categori_id','id');
    }
}
