<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table = 'invoices';
    protected $fillable = ['employee_id',
    'customer_id',
    'shipper_id',
    'product_id',
    'order_id',
    'quantity',
    'standard_price',
    'discount',
    'tax',
    'order_date',
    'shipper_date',
    'sub_total'];
}
