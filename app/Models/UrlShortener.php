<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UrlShortener extends Model
{
    protected $connection = 'mysql';

    public $table = 'url_shortener';

    protected $fillable = [
        'url',
        'redirect',
    ];
}
