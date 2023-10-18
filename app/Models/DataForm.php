<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataForm extends Model
{
    use HasFactory;
    protected $table = "data_forms" ;
    protected $primaryKey = "form_id";
    
}
