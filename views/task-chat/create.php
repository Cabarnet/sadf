<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\TaskChat $model */

$this->title = 'Create Task Chat';
$this->params['breadcrumbs'][] = ['label' => 'Task Chats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-chat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
