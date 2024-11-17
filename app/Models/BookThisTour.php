<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookThisTour extends Model
{
    use HasFactory;


    protected $table = 'bookthistour';

    protected $primaryKey = 'tour_id';


}
