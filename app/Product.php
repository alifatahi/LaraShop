<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App
 */
class Product extends Model
{
    /**
     * Filter Price
     * @return string
     */
    public function presentPrice()
    {
        return '$'.number_format($this->price / 100, 2);
    }
}
