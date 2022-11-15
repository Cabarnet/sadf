<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Task $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'difficulty')->dropDownList(['-','Легкий','Средний','Сложный'])->label('Сложность') ?>

    <?= $form->field($model, 'prize')->dropDownList(['-','4','5'])->label('Оценка') ?>

    <?= $form->field($model, 'descipline')->dropDownList(['-', 'Высшая математика', 'Программирование С#', 'Программирование С++', 'Программирование Python', 'Графический дизайн'])->label('Дисциплина') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
