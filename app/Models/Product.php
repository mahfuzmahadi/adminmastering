<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category', 'name', 'price', 'details', 'photo'
    ];

    public function getCategoryAttribute($value)
    {
        // This function can be used to manipulate the 'category' value before it is returned.
        // For example, you can capitalize the first letter of the category name:
        return ucfirst($value);
    }
}
