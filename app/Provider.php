<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function products()
    {
    return $this->belongsToMany(products::class, 'product_provider', 'id_provider', 'id_product');
    }
}
