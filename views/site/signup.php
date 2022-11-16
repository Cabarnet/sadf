<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
$this->title = 'Регистрация';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup" style="margin-top: 2%;">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Пожалуйста заполните поля для регистрации:</p>
    <div class="row">
        <div class="col-lg-10">
            <?php $form = ActiveForm::begin([
                    'id' => 'form-signup',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n{input}\n{error}",
                        'labelOptions' => ['class' => 'col-lg-3 col-form-label mr-lg-8'],
                        'inputOptions' => ['class' => 'col-lg-9 form-control'],
                        'errorOptions' => ['class' => 'col-lg-8 invalid-feedback'],
                    ],
            ]); ?>
            <?= $form->field($model, 'username')->textInput()->label('ФИО') ?>
            <?= $form->field($model, 'email')->label('Почта')?>
            <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>
            <div class="form-group">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success col-lg-7', 'name' => 'signup-button']) ?>
                <a href="http://sadf:8080/web/index.php?r=site%2Flogin" class="ml-2 btn text-success">Уже есть учетная запись?</a>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
