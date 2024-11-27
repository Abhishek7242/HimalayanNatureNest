<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $table = 'contact_form';
    protected $primaryKey = 'contact_form_id';
    protected $fillable = [
        'name',
        'email',
        'number',
        'message',
    ];
}
