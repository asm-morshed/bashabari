<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','designation_id','dob','prl_date',

    'house_no_name','area_id','office_id','reference_no','reference_date','comment'];
}
