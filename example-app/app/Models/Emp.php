<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emp extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'employee';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];
}
