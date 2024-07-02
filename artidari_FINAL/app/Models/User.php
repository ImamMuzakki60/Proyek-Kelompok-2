<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory;

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->email === 'admin@gmail.com';
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    public function kata(): HasMany
    {
        return $this->hasMany(Kata::class);
    }

    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function dislikes(): HasMany
    {
        return $this->hasMany(Dislike::class);
    }

    public function isAdmin()
    {
        return $this->email === 'admin@gmail.com'; // or any other logic to determine if the user is an admin
    }
}
