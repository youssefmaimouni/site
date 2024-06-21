<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    protected $fillable =[
        'lien',
        'logo',
        'titre',
        'description'
    ];

    public function categorier()
    {
        return $this->belongsTo(categorier::class, 'id_cat');
    }
}
