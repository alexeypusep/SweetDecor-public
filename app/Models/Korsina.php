<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korsina extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_korsin';
    public $incrementing = false;

    public function tovars()
    {
        return $this->belongsTo(Tovar::class, 'id_tovar', 'id_tovar');
    }
    public function klients()
    {
        return $this->belongsTo(Klient::class, 'id_klient', 'id_klient');
    }
}
