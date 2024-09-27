<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'prodName',
        'price',
        'category_id'
    ];

    public function getRouteKeyName()
    {
        return 'prodName';
    }


    //relacion uno a uno
    //relacion uno a muchos
    //relacion muchos a muchos //una tabla intermedia
    //relacion polimorfica

    public function category(){
        //, 'category_id', 'id'
        //return $this->belongsTo(Category::class , 'category_id', 'idCategory');
        return $this->belongsTo(Category::class , );
    }

}
