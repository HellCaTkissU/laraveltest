<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyfirstTable extends Model
{
    protected $table="myfirst_table";

    protected $fillable = [
        'welcome',
    ];
}
