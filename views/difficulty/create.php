<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Difficulty $model */

$this->title = 'Create Difficulty';
$this->params['breadcrumbs'][] = ['label' => 'Difficulties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="difficulty-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
