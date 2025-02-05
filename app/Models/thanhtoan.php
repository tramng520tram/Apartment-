<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thanhtoan extends Model
{
    //khuyến mãi
    const percent = 1;
    const vnd = 2;

    //hình thức thanh toán
    const coast = 1;
    const payment = 2;

    //status 
    const confirm = 1;
    const unconfirm = 2;

     //Hình thức phụ thu
     const time = 1;
     const day = 2;

    use HasFactory;
    protected $table = 'thanhtoan';
    protected $fillable
    = [
        'id',
        'id_thongtindatphong',
        'giatien',
        'hinhthuckhuyenmai',
        'giakhuyenmai',
        'status',
        'hinhtucphuthu',
        'giaphuthu',
        'created_at',
        'updated_at',
        'deleted_at',
        'hinhthucthanhtoan',
        'thongtinnguoidat',
        'tiennhan',
        'tongtien',
    ];

    public function tennguoidat(){
       return $this->hasOne(thongtindatphong::class, 'id', 'thongtinnguoidat');
    }
    public function tenphong(){
        return $this->hasOne(phong::class, 'id', 'id_thongtindatphong');
    }
    public function thongtin(){
        return $this->hasOne(thongtindatphong::class, 'id', 'thongtinnguoidat');
    }
}




