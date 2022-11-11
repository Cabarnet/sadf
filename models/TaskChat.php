<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task_chat".
 *
 * @property int $id
 * @property string $name
 * @property int $id_message
 *
 * @property Message $message
 * @property Task[] $tasks
 */
class TaskChat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task_chat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_message'], 'required'],
            [['id_message'], 'integer'],
            [['name'], 'string', 'max' => 64],
            [['id_message'], 'exist', 'skipOnError' => true, 'targetClass' => Message::class, 'targetAttribute' => ['id_message' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Название',
            'id_message' => 'Сообщение',
        ];
    }

    /**
     * Gets query for [[Message]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMessage()
    {
        return $this->hasOne(Message::class, ['id' => 'id_message']);
    }

    /**
     * Gets query for [[Tasks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::class, ['id_chat' => 'id']);
    }
}
