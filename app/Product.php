<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function providers()
    {
    return $this->belongsToMany(providers::class, 'product_provider', 'id_product', 'id_provider');
    }
    public function orders()
    {
    return $this->belongsToMany(orders::class, 'order_product', 'id_product', 'id_order');
    }
}
