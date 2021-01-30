<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experience_table extends Model
{
    protected $table = 'experience_tables';

    protected $primaryKey = 'experience_id';

    public $timestamps = true;

    protected $fillable = [
        'title','content','year','username'
    ];

}
