<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devvn_tinhthanhpho extends Model
{
    use HasFactory;
    protected $table="devvn_tinhthanhpho";
    protected $fillable =[
        'matp',
        'name',
        'type',
    ];
}
