<?php
use yii\helpers\Html;
?>
<div class="alert alert-success">You have entered the following information:</div>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>