<?php

$link = mysqli_connect("localhost", "root", "", "Trial_it");
$sql = "SELECT * FROM Task";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

use app\models\Task;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Челленджи';

?>

<div class="task-index">
    <div style="display: flex; flex-direction: row; width: 1075px; justify-content: space-between; margin-top: 30px; margin-bottom: 30px">
        <h1><?= Html::encode($this->title) ?></h1>

        <p style="margin-top: 9px">
            <?= Html::a('Создать новый', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>


    <?php foreach($row as $item){
            if ($item["difficulty"] == 0) $item["difficulty"] = "Не указана";
            if ($item["difficulty"] == 1) $item["difficulty"] = "Легкий";
            if ($item["difficulty"] == 2) $item["difficulty"] = "Средний";
            if ($item["difficulty"] == 3) $item["difficulty"] = "Сложный";
            if ($item["prize"] == 0) $item["prize"] = "Не указана";
            if ($item["prize"] == 1) $item["prize"] = "4";
            if ($item["prize"] == 2) $item["prize"] = "5";
            if ($item["prize"] == 0) $item["discipline"] = "Не указана";
            if ($item["prize"] == 1) $item["discipline"] = "Высшая математика";
            if ($item["prize"] == 2) $item["discipline"] = "Программирование С#";
            if ($item["prize"] == 4) $item["discipline"] = "Программирование С++";
            if ($item["prize"] == 5) $item["discipline"] = "Программирование Python";
            if ($item["prize"] == 6) $item["discipline"] = "Графический дизайн";
            if ($item["prize"] == 6) $item["discipline"] = "Физическая культура";
    ?>
        <div style="
        width: 1110px;
        height: 220px;
        border-radius: 3px 10px 10px 3px;
        background-color: #baffbc;
        border-left: 20px solid #2E8B57;
        margin-top: 20px;
        padding: 25px;
        padding-left: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        ">
            <div style="display: flex;  flex-direction: row; width: 1010px; height: 40px; justify-content: space-between;">
                <h3 style="font-size: 28px;"><?=$item["name"]?></h3>
                <div style="width: 200px;">
                    <a class="btn btn-outline-danger">Удалить</a>
                    <a class="btn btn-outline-dark">Подробнее</a>
                </div>
            </div>
            <p style="font-size: 18px; margin-top: 10px; width: 900px;"><?=$item["description"]?></p>
            <div style="display: flex;  flex-direction: row; width: 1010px; height: 30px; justify-content: space-between;">
                <div style="display: flex;  flex-direction: row; width: 300px; height: 30px; justify-content: space-between;">
                    <p style="font-size: 14px;">Уровень сложности:  <?=$item["difficulty"]?></p>
                    <p style="font-size: 14px;">Оценка - <?=$item["prize"]?></p>
                </div>
                <p style="font-size: 14px;"><?=$item["user"]?></p>
            </div>
        </div>
    <?php }?>


</div>
