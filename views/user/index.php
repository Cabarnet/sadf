<?php

use app\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Личный кабинет';
?>
<div class="user-index">

    <h1 style="margin-top: 20px;"><?= Html::encode($this->title) ?></h1>

    <p style="font-size: 20px; margin-top: 30px; margin-bottom: 0px;">Фамилия Имя Отчество: </p>
    <h3 style="font-size: 28px;"><?=Yii::$app->user->identity->username;?></h3>
    <p style="font-size: 20px; margin-top: 30px; margin-bottom: 0px;">Почта: </p>
    <h3 style="font-size: 28px;  margin-bottom: 30px;"><?=Yii::$app->user->identity->email;?></h3>
    
    <!--<a class="btn btn-outline-success" href="http://sadf:8080/web/index.php?r=user%2Fupdate&id=<?=Yii::$app->user->id?>" title="update" aria-label="update"
    data-pjax="0" data-method="post">Изменить информацию профиля</a>-->

</div>
