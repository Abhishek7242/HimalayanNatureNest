<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOurService extends Model
{
    use HasFactory;
     protected $table = 'serviceformsubmit';
protected $primaryKey = 'service_id';

}