<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Population extends Model
{
    public $table = 'population';


    protected $fillable = [
        'id', 'name', 'quantity'
    ];

    use HasFactory;
}
