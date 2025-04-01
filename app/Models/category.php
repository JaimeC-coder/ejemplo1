<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    // protected $primaryKey = 'idCategory';

    protected $fillable = [
        'catName'
    ];

    //relacion uno a uno

    public function product(){
        //return $this->hasOne(Product::class, 'category_id', 'idCategory');
        return $this->hasOne(Product::class);
    }
}
