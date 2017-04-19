<?php namespace Bedard\Vuetober\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * Example Form Widget
 */
class Example extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'bedard_vuetober_example';

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
        $this->addJs('/plugins/bedard/vuetober/assets/dist/vendor.min.js', 'Bedard.Vuetober');
        $this->addJs('/plugins/bedard/vuetober/assets/dist/example.min.js', 'Bedard.Vuetober');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
