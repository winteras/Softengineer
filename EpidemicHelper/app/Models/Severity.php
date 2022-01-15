<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Severity extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    protected $table = 'severity';
    public $incrementing = false;
}
