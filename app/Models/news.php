<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class news extends Model
{
    //
    protected $table = 'news';
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
