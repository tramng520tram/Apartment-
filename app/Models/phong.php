<?php

namespace App\Models;
use App\Models\loaiphong;
use App\Models\tang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phong extends Model
{

    const NULL = 1;
    const ORDER = 2;
    const REQUEST = 3;
    const CANCEL = 4;
    const ACTIVE = 1;
    const UNACTIVE = 2;
    use HasFactory;
    protected $table ="phong";
    protected $fillable
    = [
        'id',
        'tenphong',
        'id_tang',
        'giaphong',
        'id_loaiphong',
        'status',
        'active',
        'img',
        'mota',
        'created_at',
        'updated_at',
        'deleted_at',
        
    ];
    public function name_tang(){
         return $this->hasOne(tang::class,'id','id_tang');
    }
    public function name_loaiphong(){
        return $this->hasOne(loaiphong::class,'id','id_loaiphong');
    }



}

