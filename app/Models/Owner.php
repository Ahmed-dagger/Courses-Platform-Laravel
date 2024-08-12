<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Owner extends Authenticatable
{
    use Notifiable, HasFactory;
    protected $fillable = [
        'Owner_name',
        'Owner_email',
        'Owner_password',
        'Owner_phone',
        'academy_name',
        'academy_type',
    ];

    protected $guard = 'owner';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Owner_password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'Owner_password' => 'hashed',
        ];
    }

    public function getAuthPassword()
    {
        return $this->Owner_password;
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
