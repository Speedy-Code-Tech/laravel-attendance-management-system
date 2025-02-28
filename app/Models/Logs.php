<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Logs extends Model
{
    use HasFactory;

    protected $table = "activity_logs";

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class,'workers_id','id');
    }

}
