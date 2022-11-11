<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Prize $model */

$this->title = 'Create Prize';
$this->params['breadcrumbs'][] = ['label' => 'Prizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
