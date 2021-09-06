<?php
use yii\helpers\Html;
?>
<p>You have Computa Firus, I am <?= Html::encode($model->name) ?> I am herre o fix you computa:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Computa</label>: <?= Html::encode('broke`n') ?></li>
</ul>