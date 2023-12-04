<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $table = 'city';

    protected $fillable = [
       'id', 'name'
    ];

    protected $hidden = [
        'population_id'
     ]; 

    public function population() {
        return $this->hasOne(Population::class, 'id', 'population_id');
    }

    use HasFactory;
}
