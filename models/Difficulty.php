<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "difficulty".
 *
 * @property int $id
 * @property string $difficulty
 *
 * @property Task[] $tasks
 */
class Difficulty extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'difficulty';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['difficulty'], 'required'],
            [['difficulty'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'difficulty' => 'Сложность',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['id_difficulty' => 'id']);
    }
}
