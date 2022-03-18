<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Products extends Model
{
    //
    protected $table = 'product';
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
