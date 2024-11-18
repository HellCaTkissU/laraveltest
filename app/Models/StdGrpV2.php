<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StdGrpV2 extends Model
{

    protected $table="std_grp_v2";

    protected $fillable = [
        'std_id',
        'grp_id',
    ];

    public function students(): BelongsTo
    {
        return $this->belongsTo(Students::class);
    }
}
