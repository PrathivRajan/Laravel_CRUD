<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualProduction extends Model
{
    use HasFactory;
    protected $table = 'individual_productions';
    protected $fillable = ['project', 'pc_name', 'tl_name', 'coder_name', 'coder_id', 'count', 'quality', 'file_path'];
}
