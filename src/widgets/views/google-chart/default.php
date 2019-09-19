<?php

use yii\web\View;
use codexten\yii\widgets\GoogleChart\widgets\GoogleChart;

/* @var $this View */
/* @var $widget GoogleChart */

$widget = $this->context;
?>
<chart :type="<?= $widget->type ?>"
       :data="<?= $widget->data ?>"
       :chart-options="<?= $widget->chartOptions ?>"
       :settings="<?= $widget->settings ?>"></chart>
