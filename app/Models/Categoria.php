<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 *
 * @property $id
 * @property $nombreCategoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Anime $anime
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Categoria extends Model
{
    
    static $rules = [
		'nombreCategoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreCategoria'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function anime()
    {
        return $this->hasOne('App\Models\Anime', 'anime_id', 'id');
    }
    

}
