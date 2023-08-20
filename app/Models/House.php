<?php

namespace App\Models;

use App\Models\Office;
use App\Models\Designation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class House extends Model
{
    use HasFactory;
    protected $table = 'house';
    
    protected $fillable = ['name','designation_id','dob','prl_date','house_no_name','house_type','area_id','office_id','reference_no','reference_date','comment'];
    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }
    public function office(){
        return $this->belongsTo(Office::class);
    }
}
