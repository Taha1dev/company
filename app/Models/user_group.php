<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class user_group extends Model
{
    use HasFactory;
    public function groups(): BelongsTo
    {
        return $this->belongsTo(groups::class, 'group_id');
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
