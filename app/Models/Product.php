<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        "title",
        "short_description",
        "description",
        'image',
        'category_id'
    ] ;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function option(): \Illuminate\Database\Eloquent\Relations\HasMany 
    {
        return $this->hasMany(Option::class);
    }
    public function onptionValues(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OptionValue::class);
    }
    public function skus(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SKU::class);
    }

    public function variants(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Variant::class);
    }
    public function galery(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Galery::class);
    }
    public function createProduct($data,){
        $product = $this->create([
            'title' => $data['title'],
            'short_description' => $data['short_description'],
            'description' => $data['description'],
            'image' => $data['image'],
            'category_id' => $data['category_id']
        ]);
        return $product;
    }
}
