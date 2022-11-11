<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Difficulty $model */

$this->title = 'Update Difficulty: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Difficulties', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="difficulty-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
