<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category_product extends Model
{
    use HasFactory;
    protected $fillable = ['nama_category'];

    public function barang()
    {
        return $this->HasMany(Barang::class,'categori_id','id');
    }
}
