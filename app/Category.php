<?php

namespace App;

use App\Produit;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $fillable = ["designation", "description"];
    public function products()
    {
        return $this->hasMany(Produit::class);
    }

}
