<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_table extends Model
{
    protected $table = 'contact_tables';

    protected $primaryKey = 'contact_id';

    public $timestamps = true;
}
