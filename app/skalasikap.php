<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skalasikap extends Model
{
    protected $table = 'skalasikap';
    protected $guarded = ['id'];
    protected $fillable = ['q1','q2','q3','q4','q5','q6','q7','q8','q9','q10','q11','q12'];

}
