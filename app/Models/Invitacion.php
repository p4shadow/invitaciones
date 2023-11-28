<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    use HasFactory;

    protected $table = 'invitacion';

    protected $fillable = [
        'id_cliente', 'tipo_reunion', 'anios', 'fecha_evento', 'hr_inicio', 'hr_final', 'tema'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }
    

    
}
