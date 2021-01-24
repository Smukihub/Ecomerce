<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $fillable = ['total','referencia','recibe_id','paga_id'];
    public function ventas(){
        return Venta::where('referencia',$this->referencia)->get();
    }
    public function comprador(){
        return $this->belongsTo('App\Models\Usuario','id', 'paga_id');
    }
    public function cobrador(){
        return $this->belongsTo('App\Models\Usuario','id', 'recibe_id');
    }
}
