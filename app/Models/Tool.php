<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tool
 *
 * @property $id
 * @property $Marca
 * @property $Modelo
 * @property $TipoHerramienta
 * @property $FechaDeRegsitro
 * @property $created_at
 * @property $updated_at
 *
 * @property Calibration[] $calibrations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tool extends Model
{
    
    static $rules = [
		'Marca' => 'required',
		'Modelo' => 'required',
		'TipoHerramienta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Marca','Modelo','TipoHerramienta','FechaDeRegsitro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calibrations()
    {
        return $this->hasMany('App\Models\Calibration', 'tool_id', 'id');
    }
    

}
