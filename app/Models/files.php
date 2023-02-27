<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class files extends Model
{
    use HasFactory;
    public function group(): BelongsTo
    {
        return $this->belongsTo(groups::class, 'group_id');
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'file_owner_id');
    }
}
