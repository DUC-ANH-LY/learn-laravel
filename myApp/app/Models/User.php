<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
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
            'password' => 'hashed',
        ];
    }

    //    scope

    public function scopeTest($query)
    {
        return $query->where('name', 'like', '%d%');
    }

    //    protected static function boot()
    //    {
    //        parent::boot();
    //        static::addGlobalScope('active', function (Builder $builder) {
    //            $builder->where('active', true);
    //        });
    //    }

    public function getEmailAttribute($value)
    {
        return $value ?: '(No email provided)';
    }


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value == 'ducanh' ? $value : 'test';
    }

    /**
     * Get the tasks for the user.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
