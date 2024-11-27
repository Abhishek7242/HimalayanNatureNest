<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Import Authenticatable
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable; // Add Notifiable trait for notifications

    protected $table = 'admins';  // Table name
    protected $primaryKey = 'id'; // Primary key
    protected $fillable = [
        'email',
        'password',
    ];

    // Additional Admin model logic can go here if needed
}
