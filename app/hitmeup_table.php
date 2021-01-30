<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hitmeup_table extends Model
{   
    protected $table = 'hitmeup_tables';

    protected $primaryKey = 'hitmeup_id';

    protected $fillable = [
        'your_name','email','phone_no','your_message'
    ];
}
