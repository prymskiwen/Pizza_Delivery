<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['fname', 'email', 'address', 'city', 'state', 'zip', 'currency', 'amount'];
}
