<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    protected $table = 'servicio';

    // Los campos que se pueden asignar masivamente (mass assignment)
    protected $fillable = [
        'id_cliente', 'tipo', 'detalle', 'cant_invitados', 'comida', 'bebida', 'dj', 'fecha', 'animador'
    ];

    public function clientes(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
}
