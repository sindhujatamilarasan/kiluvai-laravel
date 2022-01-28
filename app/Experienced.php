<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experienced extends Model
{
    protected $table = 'experienced';
    protected $fillable = [
        'name', 'Current_Company_Name', 'email','date_from','location','phone','currentctc','expctc','noticeperiod','exp','file'];
}

