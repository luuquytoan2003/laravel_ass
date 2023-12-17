<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;
    protected $table = 'galery';
    public $timestamps = false;
    protected $fillable = [
        'thumbnail',
        'product_id'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    
}
