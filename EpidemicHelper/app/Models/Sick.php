<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sick extends Model
{
    use HasFactory;
    public $timestamps = false; // avoid error;
    public $id = false; // avoid error;
    protected $table = 'sick';
    public $incrementing = false;
    protected $keyType = 'string';

    
    protected $primaryKey = 'severity_level_id';
    
}
