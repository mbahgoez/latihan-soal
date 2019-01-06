<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table = "soal";
    protected $fillable = [
    	"type",
    	"jawaban",
    	"soal",
    	"kode_matkul"
    ];

}
