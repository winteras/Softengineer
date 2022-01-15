<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    protected $table = 'flight';
    // protected $fillable = ['airplane_id', 'airport_id', 'year_id', 'month_id', 'day_id', 'time_id'];
    public $incrementing = false;
    protected $keyType = 'string';

    
    protected $primaryKey = 'airplane_id';
    // protected $primaryKey = ['airplane_id', 'airport_id', 'year_id', 'month_id', 'day_id', 'time_id'];



}
