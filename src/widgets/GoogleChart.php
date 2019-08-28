<?php

namespace codexten\yii\widgets\GoogleChart\widgets;

use codexten\yii\web\Widget;

class GoogleChart extends Widget
{
    public $dataBinding;

    public $type;
    public $data;
    public $chartOptions;
    public $settings;

    public function run()
    {
        return $this->render('default');
    }
}
