<?php

namespace codexten\yii\widgets\GoogleChart\widgets;

use codexten\yii\web\Widget;

class GoogleChart extends Widget
{
    public $dataBindingPrefix;

    public $type;
    public $data;
    public $chartOptions;
    public $settings;

    /**
     * @inheritDoc
     */
    public function init()
    {
        if ($this->dataBindingPrefix) {
            $this->type = $this->getDataBindVariable('type');
            $this->data = $this->getDataBindVariable('chartData');
            $this->chartOptions = $this->getDataBindVariable('chartOptions');
            $this->settings = $this->getDataBindVariable('settings');
        }

        parent::init();
    }

    protected function getDataBindVariable($variable)
    {
        return "{$this->dataBindingPrefix}.{$variable}";
    }
}
