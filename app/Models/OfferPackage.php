<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferPackage extends Model
{
    use HasFactory;

    protected $table = 'offerspackages';

    protected $primaryKey = 'offerspackages_id';
    protected $fillable = [
        'title',
        'tour_name',
        'duration',
        'images',
    ];
}
