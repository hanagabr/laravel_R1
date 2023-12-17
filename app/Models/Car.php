<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDelete;

class Car extends Model
{
    use HasFactory ;
    protected $fillable=[
        'carTitle',
        'price',
        'published',
        'descreption',
        'image',
        'category_id'   
    ];
public function category(){
    return $this->belongsTo(Category::class);
}
}
