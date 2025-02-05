<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thongtindatphong extends Model
{
    use HasFactory;
    protected $table="thongtindatphong";
    protected $fillable
    =[
    'id',
    'hoten',
    'sdt',
    'gmail',
    'ngaysinh',
    'cmnd',
    'ngaynhan',
    'ngaytra',
    'created_at',
    'updated_at',
    'id_phong',
    ];
}
