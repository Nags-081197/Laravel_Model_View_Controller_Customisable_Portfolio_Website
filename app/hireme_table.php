<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hireme_table extends Model
{
    protected $table = 'hireme_tables';

    protected $primaryKey = 'hireme_id';

    public $timestamps = true;

    protected $fillable = [
        'cart_photo','hire_title','hire_price','hire_service1','hire_service2','hire_service3'
    ];

}
