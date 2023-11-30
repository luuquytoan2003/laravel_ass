<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'deleted'
    ];
    public function createCate($data){
        $this->create([
            'name' => $data['name'],
            'description' =>$data['description']
        ]);
    }
    public function updateCate($data,$id){
        $this->where('id',$id)->update([
            'name' => $data['name'],
            'description' => $data['description']
        ]);
    }
}
