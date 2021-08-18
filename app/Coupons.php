<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupons extends Model
{
    protected $primaryKey = 'c_id';
    protected $fillable=['code','minimum_amount','discount_money','start_date','end_date','status'];
}
