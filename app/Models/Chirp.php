<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    protected $fillable = ['user_id', 'message', 'created_at', 'updated_at'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
