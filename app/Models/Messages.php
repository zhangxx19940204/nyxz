<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Messages extends Model
{
    //
    protected $table = 'message';
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
