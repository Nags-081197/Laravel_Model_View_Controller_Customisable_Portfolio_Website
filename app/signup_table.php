<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signup_table extends Model
{
    protected $table = 'signup_tables';

    protected $primaryKey = 'signup_id';

    protected $fillable = [
        'first_name','last_name','email','username','password','re_password','account_type'
    ];
}
