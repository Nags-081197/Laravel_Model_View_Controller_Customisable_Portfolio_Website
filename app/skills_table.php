<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skills_table extends Model
{
    protected $table = 'skills_tables';

    protected $primaryKey = 'skills_id';

    public $timestamps = true;
}
