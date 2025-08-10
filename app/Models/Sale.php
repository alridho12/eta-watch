<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sales';
    protected $primaryKey = 'pk_id_sales';
    protected $guarded = ['pk_id_sales'];

    public function katalog()
    {
        return $this->belongsTo(Katalog::class, 'fk_id_katalog', 'pk_id_katalog');
    }
}
