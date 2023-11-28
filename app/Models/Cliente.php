<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $fillable = ['nombre', 'apellido', 'tel', 'direccion', 'dni', 'otro'];

    public function servicios()
    {
    return $this->hasMany(Servicio::class, 'id_cliente', 'id');
    }
    
    public function invitaciones()
{
    return $this->hasMany(Invitacion::class, 'id_cliente');
}
}
