<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $comentrio_id
 * @property integer $publicacion_id
 * @property integer $usuarios_id
 * @property string $contenido
 * @property string $fecha_comentario
 * @property Publicacione $publicacione
 * @property Usuario $usuario
 */
class Comentario extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'comentrio_id';

    /**
     * @var array
     */
    protected $fillable = ['publicacion_id', 'usuarios_id', 'contenido', 'fecha_comentario'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publicacione()
    {
        return $this->belongsTo('App\Models\Publicacione', 'publicacion_id', 'publicacion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario', 'usuarios_id', 'usuario_id');
    }
}
