<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exampaper extends Model
{
    use HasFactory;
    protected $table = "exam_paper";
    protected $primaryKey ="semester";
}
