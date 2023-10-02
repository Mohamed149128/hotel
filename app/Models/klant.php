<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klant extends Model
{

    use HasFactory;

    protected $fillable = [
        'klantnaam','adres','creditkaartnummer','vertrekdatum','aankomstdatum'
    ];

    public function kamer()
    {
        return $this->belongsTo(kamer::class);
    }
}
