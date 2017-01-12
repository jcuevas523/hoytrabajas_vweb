<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

/**
 * @SWG\Definition(
 *      definition="Oferta",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="nombre",
 *          description="nombre",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="descripcion",
 *          description="descripcion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="url_imagen",
 *          description="url_imagen",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="direccion",
 *          description="direccion",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="paga",
 *          description="paga",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sector_id",
 *          description="sector_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="ciudad_id",
 *          description="ciudad_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="lat",
 *          description="lat",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="lng",
 *          description="lng",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="empleador_id",
 *          description="empleador_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="obs",
 *          description="obs",
 *          type="string"
 *      )
 * )
 */
class Oferta extends Model
{
    use SoftDeletes;

    public $table = 'ofertas';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'url_imagen',
        'direccion',
        'paga',
        'desde',
        'hasta',
        'sector_id',
        'ciudad_id',
        'lat',
        'lng',
        'empleador_id',
        'bloqueada',
        'obs'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'url_imagen' => 'string',
        'direccion' => 'string',
        'paga' => 'string',
        'sector_id' => 'integer',
        'ciudad_id' => 'integer',
        'lat' => 'string',
        'lng' => 'string',
        'empleador_id' => 'integer',
        'obs' => 'string'
    ];

    /*public function getDesdeAttribute($value)
    {
        return $value->format('M d Y');
    }*/
    /*public function getDesdeAttribute()
    {
        return  $this->attributes['desde']  ;
    }*/


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ciudades()
    {
        return $this->belongsTo(\App\Models\Ciudad::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function empleadores()
    {
        return $this->belongsTo(\App\Models\Empleador::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function sectores()
    {
        return $this->belongsTo(\App\Models\Sector::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function postulaciones()
    {
        return $this->hasMany(\App\Models\Postulacion::class);
    }
}
