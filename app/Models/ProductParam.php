<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class ProductParam extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'product_param_type_id',
    ];

    //  商品规格类型
    public function productParamType()
    {
        return $this->belongsTo(ProductParamType::class);
    }
}
