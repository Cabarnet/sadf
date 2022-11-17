<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Task $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="task-form" style="margin-top: 30px;">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput()->label('Фамилия Имя Отчество') ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Описание') ?>

    <?= $form->field($model, 'difficulty')->dropDownList(['-','Легкий','Средний','Сложный'])->label('Сложность') ?>

    <?= $form->field($model, 'prize')->dropDownList(['-','4','5'])->label('Оценка') ?>

    <?= $form->field($model, 'discipline')->dropDownList(['-', 'Высшая математика', 'Программирование С#', 'Программирование С++', 'Программирование Python', 'Графический дизайн', 'Физическая культура'])->label('Дисциплина') ?>

    <?= $form->field($model, 'chat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Создать', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
