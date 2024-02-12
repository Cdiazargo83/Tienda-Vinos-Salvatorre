<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [
    'id',
    'name_order',
    'phone_order',
    'dni_order',
    'ruc',
    'razon_social',
    'direccion_fiscal',
    'name',
    'dni',
    'total',
    'created_at',
    'update_at',
    'status',
    'content',
    'selected_store'
];
    protected $fillable = ['total','xmlData'];

                                //PARA BITEL
    const RESERVADO     = 1; //21 VERIFICAR
    const PAGADO        = 2; //41 VERIFICAR PAGO
    const DESPACHADO    = 3; //61 DESPACHAR
    const ENTREGADO     = 4; //81,100 RECIVIDO-COMPLETADO
    const ANULADO       = 5; //999 INVALIDO

    //Relacion uno a mucho inversa
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function images(){
        return $this->morphMany(Image::class, "imageable");
      }

}



