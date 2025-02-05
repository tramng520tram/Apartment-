<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devvn_quanhuyen extends Model
{
    use HasFactory;
    protected $table="devvn_quanhuyen";
    protected $fillable =[
        'maqh',
        'name',
        'type',
        'matp',
    ];
}
