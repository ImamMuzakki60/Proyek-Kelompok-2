<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'likes';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kata(): BelongsTo
    {
        return $this->belongsTo(Kata::class);
    }
}
