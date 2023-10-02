<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamer extends Model
{

    public function boekingen()
    {
        return $this->hasOne(Boekingen::class);
    }


    use HasFactory;

    protected $fillable = [
        'soortkamer','kamernummer','kameropervlakte',
        'kamerminibar','aantalpersonen','kamerbad','prijspernacht',
    ];
}

