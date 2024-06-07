<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Phương thức để tạo token cho người dùng
    public function generateToken()
    {
        // Tạo một token mới cho người dùng
        $token = $this->createToken('MyApp');

        // Trả về giá trị của token
        return [
            'access_token' => $token->plainTextToken, // Giá trị của token
        
        ];
    }
}
