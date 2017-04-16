<?php namespace Author\Plugin\Models;

use Model;

/**
 * Thing Model
 */
class Thing extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'author_plugin_things';

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
