<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
