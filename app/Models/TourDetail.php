<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourDetail extends Model
{
    use HasFactory;

    protected $table = 'tour_details';
    protected $primaryKey = 'tourDetails_id';

    // Allow mass assignment for these fields
    protected $fillable = [
        'tourTitle',
        'tourPackageTitle',
        'tourPackageImage',
        'tourPackageDuration',
        'tourPackageRoute',
        'tourPackageStartPoint',
        'tourPackageEndPoint',
        'tourCoverImage',
        'packageTags',
        'offerPackage', // Make sure this is included
    ];

}

