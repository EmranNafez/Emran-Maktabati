<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Book extends Model
{
    use HasFactory;
    public function category()
{
    return $this->belongsTo(Category::class);
}

public function orderItems()
{
    return $this->hasMany(OrderItem::class);
}

}
