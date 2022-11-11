<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TaskChat $model */

$this->title = 'Update Task Chat: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Task Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-chat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
