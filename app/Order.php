<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function providers()
    {
    return $this->belongsToMany(providers::class, 'order_product', 'id_order', 'id_product');
    }
}
