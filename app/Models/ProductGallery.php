<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id',
        'photo',
        'is_default'
    ];

    /**
     * Get the product that owns the ProductGallery
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function getPhotoAttribute($value) {
        return url('storage/' . $value);
    }
}
