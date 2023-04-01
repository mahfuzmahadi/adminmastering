<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['content', 'author_id'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

}
