<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home_table extends Model
{
    protected $table = 'home_tables';

    protected $primaryKey = 'home_id';

    public $timestamps = true;
}
