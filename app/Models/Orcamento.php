<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    protected $table = 'torcamento';
    protected $primaryKey = 'controle';
    protected $connection = 'criador';
    public $timestamps = false;
}
