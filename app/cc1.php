<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cc1 extends Model
{
    protected $table = 'cc1';
    protected $guarded = ['id'];
    protected $fillable = ['kelas','nik','nama','tier11','tier12','tier13','tier13_e','tier14','tier21','tier31','tier32','tier33','tier33_e','tier34','tier41','tier42','tier43','tier44','tier51','tier52','tier53','tier61','tier71','tier72','tier73','tier73_e','tier74'];
}
