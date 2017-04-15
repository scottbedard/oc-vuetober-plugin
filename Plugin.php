<?php namespace Author\Plugin;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies.
     */
    public $require = [];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Plugin',
            'description' => 'No description provided yet...',
            'author'      => 'Author',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Author\Plugin\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'author.plugin.some_permission' => [
                'tab' => 'Plugin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'plugin' => [
                'label'       => 'Plugin',
                'url'         => Backend::url('author/plugin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['author.plugin.*'],
                'order'       => 500,
            ],
        ];
    }
}
