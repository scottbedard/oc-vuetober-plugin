<?php namespace Author\Plugin\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * Example Form Widget
 */
class Example extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'author_plugin_example';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('example');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addJs('/plugins/author/plugin/assets/dist/vendor.min.js', 'Author.Plugin');
        $this->addJs('/plugins/author/plugin/assets/dist/example.min.js', 'Author.Plugin');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
