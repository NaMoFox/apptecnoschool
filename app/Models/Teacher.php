<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property $id
 * @property $names
 * @property $lastnames
 * @property $birthdate
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teacher extends Model
{
    
    static $rules = [
		'names' => 'required',
		'lastnames' => 'required',
		'birthdate' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','lastnames','birthdate'];



}
