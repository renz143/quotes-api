<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model {

    protected $table = 'quotes_table';
    protected $guarded = [];

    protected $fillable = [
        'title',
        'author',
        'image',
    ];
}
