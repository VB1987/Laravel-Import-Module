<?php

namespace Modules\Import\Entities;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';

    protected $fillable = [
        'siteid',
        'type',
        'productcode',
        'stocklevel',
        'backdate',
        'editor',
    ];
}
