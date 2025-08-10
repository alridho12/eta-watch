<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Katalog extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'katalog';
    protected $primaryKey = 'pk_id_katalog';
    protected $guarded = ['pk_id_katalog'];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'fk_id_brand', 'pk_id_brand');
    }


    public function sales()
    {
        return $this->hasMany(Sale::class, 'fk_id_katalog', 'pk_id_katalog');
    }
}
