<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionValue extends Model
{
    use HasFactory;
    protected $table = 'option_values';
    protected $fillable = [
        'option_id',
        'value', 
    ];
    public function option(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Option::class);
    }
    public function createOptionValues($data){
        $this->create([
            'option_id' => $data['option_id'],
            'value' => $data['value']
        ]);
    }
}
