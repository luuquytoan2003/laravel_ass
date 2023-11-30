<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $fillable = [
        'name',
        'visual'
    ];
    public function product(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    public function optionValues(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OptionValue::class);
    }
    public function createOp($data){
        $this->create([
            'name'=>$data['name'],
            'visual'=>$data['visual']
        ]);
    }
    public function updateOp($data,$id){
        $this->where('id',$id)->update([
            'name' => $data['name'],
            'visual'=>$data['visual']
        ]);
    }
}
