<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devvn_xaphuongthitran extends Model
{
    use HasFactory;
    protected $table="devvn_xaphuongthitran";
    protected $fillable =[
        'xaid',
        'name',
        'type',
        'maqh',
    ];
}
