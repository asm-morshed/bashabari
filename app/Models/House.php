<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = 'house';
    protected $primaryKey = 'id';
    protected $fillable = ['name','designation','office','dob','prl_date',

'house_no_name','reference_no','comment'];
}
