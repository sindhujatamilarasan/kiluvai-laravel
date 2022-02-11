<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fresher extends Model
{
    protected $table = 'fresher';
    protected $fillable = [
        'name', 'Graduation', 'email','pg','location','phone','lang','file','job_id','from'];
}
