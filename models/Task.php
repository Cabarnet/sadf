<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int $id_user
 * @property string $name
 * @property string $description
 * @property int $id_difficulty
 * @property int $id_prize
 * @property int $id_descipline
 * @property int $id_chat
 *
 * @property TaskChat $chat
 * @property Discipline $descipline
 * @property Difficulty $difficulty
 * @property Prize $prize
 * @property User $user
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'name', 'description', 'id_difficulty', 'id_prize', 'id_descipline', 'id_chat'], 'required'],
            [['id_user', 'id_difficulty', 'id_prize', 'id_descipline', 'id_chat'], 'integer'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['id_chat'], 'exist', 'skipOnError' => true, 'targetClass' => TaskChat::class, 'targetAttribute' => ['id_chat' => 'id']],
            [['id_difficulty'], 'exist', 'skipOnError' => true, 'targetClass' => Difficulty::class, 'targetAttribute' => ['id_difficulty' => 'id']],
            [['id_descipline'], 'exist', 'skipOnError' => true, 'targetClass' => Discipline::class, 'targetAttribute' => ['id_descipline' => 'id']],
            [['id_prize'], 'exist', 'skipOnError' => true, 'targetClass' => Prize::class, 'targetAttribute' => ['id_prize' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'id_user' => 'Пользователь',
            'name' => 'Название',
            'description' => 'Описание',
            'id_difficulty' => 'Сложность',
            'id_prize' => 'Приз',
            'id_descipline' => 'Дисциплина',
            'id_chat' => 'Чат',
        ];
    }

    /**
     * Gets query for [[Chat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChat()
    {
        return $this->hasOne(TaskChat::class, ['id' => 'id_chat']);
    }

    /**
     * Gets query for [[Descipline]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDescipline()
    {
        return $this->hasOne(Discipline::class, ['id' => 'id_descipline']);
    }

    /**
     * Gets query for [[Difficulty]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDifficulty()
    {
        return $this->hasOne(Difficulty::class, ['id' => 'id_difficulty']);
    }

    /**
     * Gets query for [[Prize]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrize()
    {
        return $this->hasOne(Prize::class, ['id' => 'id_prize']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'id_user']);
    }
}
