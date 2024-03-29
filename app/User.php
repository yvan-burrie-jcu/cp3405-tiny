<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();
    }

    public function student()
    {
        return $this->hasOne('App\Student');
    }

    public function company()
    {
        return $this->hasOne('App\Company');
    }

    public function teacher()
    {
        return $this->hasOne('App\Teacher');
    }

    public function profile()
    {
        $profile = $this;
        switch ($this->user_type)
        {
            case 'student':
                $profile = $this->student();
                break;
            case 'company':
                $profile = $this->company();
                break;
            case 'teacher':
                $profile = $this->teacher();
                break;
        }
        return $profile;
    }
}
