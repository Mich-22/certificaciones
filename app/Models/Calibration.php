<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calibration
 *
 * @property $id
 * @property $tool_id
 * @property $Status
 * @property $description
 * @property $created_at
 * @property $updated_at
 *
 * @property Tool $tool
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calibration extends Model
{
    
    static $rules = [
		'tool_id' => 'required',
		'Status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tool_id','Status','description'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tool()
    {
        return $this->hasOne('App\Models\Tool', 'id', 'tool_id');
    }
    

}
