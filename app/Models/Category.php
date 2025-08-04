<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product; // <-- Ajoute cet import

class Category extends Model
{
    use HasFactory;

    // app/Models/Category.php
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
