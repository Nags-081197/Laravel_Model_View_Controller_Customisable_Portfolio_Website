<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfoliopage_table extends Model
{
    protected $table = 'portfoliopage_tables';

    protected $primaryKey = 'portfoliopage_id';

    public $timestamps = true;

    protected $fillable = [
        'portfolio_image','portfolio_image_type'
    ];
}
