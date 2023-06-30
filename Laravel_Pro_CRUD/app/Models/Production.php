<?php

namespace App\Models;

use Chithresudev\LaravelFilterSortSearchable\Traits\FilterSortSearchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    use HasFactory, FilterSortSearchable;
    protected $table = 'productions';
    protected $fillable = ['project', 'pc_name', 'tl_name', 'published_at', 'topper_count', 'topper_quality', 'overall_count', 'overall_quality'];
}
