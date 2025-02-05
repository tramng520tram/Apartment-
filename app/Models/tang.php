<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tang extends Model
{
    use HasFactory;
    protected $table = "tang";
    protected $fillable
    = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];
}
