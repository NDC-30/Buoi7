<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Đặt tên bảng đúng với MySQL
    protected $primaryKey = 'productCode'; // Đặt khóa chính đúng
    public $incrementing = false; // Nếu khóa chính không tự tăng
    protected $keyType = 'string'; // Nếu khóa chính là kiểu string

    protected $fillable = [
        'productCode',
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescription',
        'quantityInStock',
        'buyPrice',
        'MSRP'
    ];
}
