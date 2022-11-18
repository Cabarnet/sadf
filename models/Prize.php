<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prize".
 *
 * @property int $id
 * @property int $prize
 *
 * @property Task[] $tasks
 */
class Prize extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prize';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prize'], 'required'],
            [['prize'], 'string', 'max' => 16],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'prize' => 'Приз',
        ];
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['id_prize' => 'id']);
    }
}
