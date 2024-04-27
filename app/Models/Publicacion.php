<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $publicacion_id
 * @property string $titulo
 * @property string $contenido
 * @property string $fecha_publicacion
 * @property Comentario[] $comentarios
 */
class Publicacion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'publicaciones';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'publicacion_id';

    /**
     * @var array
     */
    protected $fillable = ['titulo', 'contenido', 'fecha_publicacion'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'publicacion_id', 'publicacion_id');
    }
}
