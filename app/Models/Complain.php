<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;
    protected $table ='complain';
    protected $fillable = ['lab_id','computer_id','software_id','hardware_id','feedback','image'];
}
