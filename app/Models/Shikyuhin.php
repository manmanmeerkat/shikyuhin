<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shikyuhin extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'location',
        'plant',
        'furidashi'
    ];
    

    public function scopeSearchShikyuhins($query, $input = null)
    {
        if(!empty($input)){
            if(Shikyuhin::where('number', 'like', $input . '%')
            ->exists())
            {
                return $query->where('number', 'like', $input . '%');
            }
        }
    }
}
