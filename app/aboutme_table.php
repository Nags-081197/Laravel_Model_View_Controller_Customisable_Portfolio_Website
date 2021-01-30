<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutme_table extends Model
{
    protected $table = 'aboutme_tables';

    protected $primaryKey = 'aboutme_id';

    public $timestamps = true;
}
