<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
