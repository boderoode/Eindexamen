<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $fillable = [
        'gezin_id',
        'gezin_naam',
        'adres_id',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'email',
        'telefoonnummer',
    ];
}
