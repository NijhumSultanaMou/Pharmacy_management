<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable=['firstname','lastname','gender','address','phone','purchaseamount'];
}
