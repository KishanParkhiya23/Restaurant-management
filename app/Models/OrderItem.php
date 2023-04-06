<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function orderFoods()
    {
        return $this->belongsTo(Menu::class, 'product_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(Fuser::class, 'user_id', 'id');
    }
}
