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
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

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
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'plugin' => [
                'icon'        => 'icon-leaf',
                'label'       => 'author.plugin::lang.plugin.name',
                'order'       => 500,
                'permissions' => ['author.plugin.*'],
                'url'         => Backend::url('author/plugin/things'),
                'sideMenu' => [
                    'things' => [
                        'icon'          => 'icon-leaf',
                        'label'         => 'Things',
                        'permissions'   => [],
                        'url'           => Backend::url('author/plugin/things'),
                    ],
                ],
            ],
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
}
