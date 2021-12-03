<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $names
 * @property $lastnames
 * @property $birthdate
 * @property $id_user
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'names' => 'required',
		'lastnames' => 'required',
		'birthdate' => 'required',
		'id_user' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['names','lastnames','birthdate','id_user'];



}
