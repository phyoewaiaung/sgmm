<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SgToMmItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->hasMany(SgCategoryItem::class, 'sg_to_mm_id');
    }
}
