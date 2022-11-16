<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Вход';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" style="margin-top: 2%;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните поля для входа:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'form-signup',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{input}\n{error}",
            'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-5'],
            'inputOptions' => ['class' => 'col-lg-5 form-control'],
            'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
        ],
    ]); ?>

        <?= $form->field($model, 'email')->textInput(['style'=>'border-color: #ced4da; background-image: none;'])->label('Почта')?>

        <?= $form->field($model, 'password')->passwordInput(['style'=>'border-color: #ced4da; background-image: none;'])->label('Пароль') ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"offset-lg-0 ml-3 col-lg-3 custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ])->label('Запомнить меня') ?>

        <div class="form-group">
            <div class="offset-lg-0 col-lg-15">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-success col-lg-5', 'name' => 'login-button']) ?>
                <a href="http://sadf:8080/web/index.php?r=site%2Fsignup" class="btn text-success">Зарегистрироваться</a>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
