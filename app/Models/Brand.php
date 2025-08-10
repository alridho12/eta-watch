<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'brand';
    protected $primaryKey = 'pk_id_brand';
    protected $guarded = ['pk_id_brand'];
}
