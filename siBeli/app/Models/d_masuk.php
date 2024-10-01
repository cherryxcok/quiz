<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class d_masuk extends Model
{
    use HasFactory;
    protected $fillable = ['id_masuk','kd_masuk','kd_barang_beli','jumlah','subtotal'];
}
