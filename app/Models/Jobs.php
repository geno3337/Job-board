<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model
{

    use SoftDeletes;

    protected $table = 'job_details';

    protected $fillable = [
        'jobRole',
        'jobArea',
        'skillsRequired',
        'salary',
        'company',
        'location',
        'experience',
        'discription',
        'applyLink',
        'isAproved',
        'postedBy',
    ];

    protected $hidden = [
       'isAproved',
    ];
}
