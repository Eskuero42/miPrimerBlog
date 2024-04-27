<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $usuario_id
 * @property string $nombre
 * @property string $correo
 * @property string $contraseña
 * @property Comentario[] $comentarios
 */
class Usuario extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'usuario_id';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'correo', 'contraseña'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'usuarios_id', 'usuario_id');
    }
}
