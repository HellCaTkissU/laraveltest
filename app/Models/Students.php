<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Testing\Fluent\Concerns\Has;


class Students extends Model
{
    protected $table = 'students';

    public function groups()
    {
        return $this->belongsToMany(Groups::class, 'std_grp_v2', 'std_id', 'grp_id');
    }

}
