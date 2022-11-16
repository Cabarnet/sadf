<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $user
 * @property string $name
 * @property string $description
 * @property string $difficulty
 * @property string $prize
 * @property string $discipline
 * @property string $chat
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
            [['user', 'name', 'description', 'difficulty', 'prize', 'discipline', 'chat'], 'required'],
            [['description'], 'string'],
            [['user', 'name', 'difficulty', 'discipline', 'chat'], 'string', 'max' => 255],
            [['prize'], 'string', 'max' => 2],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'name' => 'Name',
            'description' => 'Description',
            'difficulty' => 'Difficulty',
            'prize' => 'Prize',
            'discipline' => 'Discipline',
            'chat' => 'Chat',
        ];
    }
}
