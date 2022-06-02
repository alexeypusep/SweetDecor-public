<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_order';
    public $incrementing = false;

    public function klients()
    {
        return $this->belongsTo(Klient::class, 'id_klient', 'id_klient');
    }
}
