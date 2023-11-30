<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        "title",
        "price",
        "",
    ] ;
    public function option(): \Illuminate\Database\Eloquent\Relations\HasMany 
    {
        return $this->hasMany(Option::class);
    }
    public function onptionValues(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OptionValue::class);
    }
}
