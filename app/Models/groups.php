<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class groups extends Model
{
    use HasFactory;
    public function files (): HasMany
    {
        return $this->hasMany(files::class);
    }
    public function user_group(): HasMany
    {
        return $this->hasMany(user_group::class);
    }
}
