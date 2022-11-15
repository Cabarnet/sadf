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
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <?= $form->field($model, 'username')->textInput() ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <div class="form-group">
                <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-success', 'name' => 'signup-button']) ?>
                <a href="http://sadf/web/index.php?r=site%2Flogin" class="btn text-success">Уже есть учетная запись?</a>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
