<?php namespace Bedard\Vuetober\Models;

use Model;

/**
 * Thing Model
 */
class Thing extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'bedard_vuetober_things';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [
        'example'
    ];
}
