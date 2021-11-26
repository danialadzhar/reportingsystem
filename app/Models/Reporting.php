<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    use HasFactory;

    protected $table = 'reporting';

    protected $fillable = [
        'report_option',
        'report_value',
        'report_section',
        'status_value',
        'dept',
    ];
}
